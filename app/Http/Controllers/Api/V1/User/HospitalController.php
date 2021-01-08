<?php

namespace App\Http\Controllers\Api\V1\User;

use App\Hospital;
use App\Http\Controllers\Controller;
use App\Models\Hospital\Location;
use Illuminate\Http\Request;

class HospitalController extends Controller
{
    public function locations(Request $request)
    {
        $latitude = (float) ($request->lat ?? auth()->user()->lat);
        $longitude =  (float) ($request->lng ?? auth()->user()->lng);
        $hospitalLocations = Location::geofence($latitude, $longitude, 10000, 30000)->get();
        return response()->json($hospitalLocations);
    }
}
