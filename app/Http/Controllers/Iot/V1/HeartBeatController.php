<?php

namespace App\Http\Controllers\Iot\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Iot\V1\Car\SetCurrentBPM;
use Illuminate\Http\Request;

class HeartBeatController extends Controller
{
    public function updateByPatient(Request $request)
    {
        auth()->user()->setHeartBeat($request->value);
        return response()->noContent();
    }

    public function updateByCar(SetCurrentBPM $request)
    {
        $car =  auth()->user();
        if (!$car->hasPatient()) {
            return response()->json(['error' => "car dosn't have any patient"]);
        }
        $car->setHeartBeat($request->value);
        return response()->json([
            'count' => $car->heartbeats()->count(),
            'latest_value' => $car->heartbeats()->latest()->first()->value
        ]);
    }
}
