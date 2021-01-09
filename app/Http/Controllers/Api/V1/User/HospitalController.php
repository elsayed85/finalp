<?php

namespace App\Http\Controllers\Api\V1\User;

use App\Hospital;
use App\Http\Controllers\Controller;
use App\Models\Hospital\Location;
use App\Models\Hospital\MedicalSpecialties;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HospitalController extends Controller
{
    public function locations(Request $request)
    {
        $request->validate([
            "specialties" => ['sometimes', 'array', 'min:1'],
            'specialties.*' => ['required', 'integer']
        ]);

        $latitude = (float) ($request->lat ?? auth()->user()->lat);
        $longitude =  (float) ($request->lng ?? auth()->user()->lng);
        $specialtiesIds = (array) $request->specialties;

        $specialties = count($specialtiesIds) > 0 ? MedicalSpecialties::whereIn("id", $specialtiesIds)->ids() : [];

        $hospitalLocations = Location::geofence($latitude, $longitude, 10000, 30000)->when(count($specialties) > 0, function ($q) use ($specialties) {
            return $q->with(["hospital" =>  function ($query) use ($specialties) {
                $query->whereHas("specialties", function ($spcQuery) use ($query, $specialties) {
                    return $spcQuery->whereIn('hospital_specialties.id', $specialties);
                });
            }]);
        })->get();

        return response()->json(["data" => $hospitalLocations]);
    }
}
