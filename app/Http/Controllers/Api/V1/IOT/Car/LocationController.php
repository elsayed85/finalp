<?php

namespace App\Http\Controllers\Api\V1\IOT\Car;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\IOT\Car\UpdateCurrentLocation;
use App\Models\Drive\Car;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function updateCurrentLocation(UpdateCurrentLocation $request)
    {
        $request->input('car')->update([
            'lat' => $request->lat,
            'lng' => $request->lng
        ]);
        return response()->json([
            'location' => $request->validated(),
            'date' => now(),
            'success' => true
        ]);
    }
}
