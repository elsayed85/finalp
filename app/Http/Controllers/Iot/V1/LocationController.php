<?php

namespace App\Http\Controllers\Iot\V1;

use App\Events\Iot\V1\Car\SendCurrentLocation;
use App\Http\Controllers\Controller;
use App\Http\Requests\Iot\V1\Car\UpdateCurrentLocation;
use App\Models\Drive\Car;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function updateCurrentLocation(UpdateCurrentLocation $request)
    {
        $car = $request->user();

        $payload = [
            'lat' => $request->lat,
            'lng' => $request->lng
        ];

        $car->update($payload);

        event((new SendCurrentLocation($car->id, $payload)));

        return response()->json([
            'car' => $car->id,
            'success' => true,
            'payload' => $payload
        ]);
    }
}
