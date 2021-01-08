<?php

namespace App\Http\Controllers\Api\V1\User;

use App\Http\Controllers\Controller;
use App\Models\Drive\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function locations(Request $request)
    {
        $latitude = (float) ($request->lat ?? auth()->user()->lat);
        $longitude =  (float) ($request->lng ?? auth()->user()->lng);
        $carsLocations = Car::Available()->select(['lat', 'lng', 'id'])->geofence($latitude, $longitude, 10000, 30000)->get();
        return response()->json($carsLocations);
    }
}
