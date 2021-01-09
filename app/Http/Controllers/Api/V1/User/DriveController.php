<?php

namespace App\Http\Controllers\Api\V1\User;

use App\Drive\HospitalDrive;
use App\Hospital;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\User\Drive\changeDestinationRequest;
use App\Http\Requests\Api\V1\User\Drive\MakeDriveRequest;
use App\Models\Drive\Car;
use App\Models\Drive\Drive;
use Illuminate\Http\Request;

class DriveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(auth()->user()->drives()->latest()->paginate(10));
    }


    public function makeDrive(MakeDriveRequest $request)
    {
        $patientlocation = $request->only(['s_lat', 's_lng']);
        $nearestCar = Car::Available()->geofence($request->s_lat, $request->s_lng, 2000, 3000)->orderBy("distance")->first();
        if (is_null($nearestCar)) {
            return response()->json([
                'success' =>  false,
                'message' => 'no avaiable car in range 2Km to 3Km',
                'user_location' => $patientlocation,
            ]);
        }

        $drive = (new HospitalDrive(auth()->user()))->start($request->s_lat, $request->s_lng, $nearestCar);

        return response()->json([
            'success' => true,
            'drive_details' => $drive,
            'drive_status' => $drive->status
        ]);
    }

    public function changeDestination(changeDestinationRequest $request, Drive $drive)
    {
        $nearsetHospital = Hospital::find($request->hospital_id)->first();
        $destination = $nearsetHospital->location;

        $driveLastDestination = $drive->locations()->latest()->first();

        if ($driveLastDestination && ((string)$driveLastDestination->d_lat == (string)$destination->lat && (string)$driveLastDestination->d_lng == (string)$destination->lng)) {
            return response()->json([
                'success' => false,
                'message' => "Hospital '{$nearsetHospital->name}' location is the current location"
            ]);
        }

        $lastDestination = $drive->locations()->create(['d_lat' => $destination->lat, 'd_lng' => $destination->lng]);

        return response()->json([
            'success' =>  true,
            'last_destination' => $lastDestination,
            'hospital_info' => $nearsetHospital
        ]);
    }
}
