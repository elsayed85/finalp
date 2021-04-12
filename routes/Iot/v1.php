<?php

use App\Events\sendPositionEvent;
use App\Http\Controllers\Iot\V1\AuthController;
use App\Http\Controllers\Iot\V1\CarController;
use App\Http\Controllers\Iot\V1\HeartBeatController;
use App\Http\Controllers\Iot\V1\LocationController;
use App\Services\Location\Parser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;

Route::post('login', [AuthController::class, "login"])->name('car.login');

Route::group(['middleware' => ['auth:sanctum'], 'as' => 'car.'], function () {
    Route::post('update-current-location', [LocationController::class, "updateCurrentLocation"])->name('update_current_location');
    Route::post('set-current-patient', [CarController::class, "setCurrentPatient"])->name('set_current_patient');
    Route::post('update-heartbeat', [HeartBeatController::class, "updateByCar"])->name('heartbeat.update');
    Route::post('logout', [AuthController::class, "logout"])->name('logout');
});



Route::get('test', function (Request $request) {
    Log::alert($request->all());
    return response()->json([
        'data' => $request->all()
    ]);

});

Route::get('test2', function (Request $request) {
    $location = $request->location;
    $data = (object)(new Parser())->readLine($location)->toArray();
    return response()->json([
        'data' => [
            'utcTime' => $data->utcTime,
            'latitude' => $data->latitude,
            'latitudeDirection' => $data->latitudeDirection,
            'longitude' => $data->longitude,
            'longitudeDirection' => $data->longitudeDirection,
            'gpsQuality' => $data->gpsQuality,
            'nbSatellites' => $data->nbSatellites,
            'horizontalDilutionPrecision' => $data->horizontalDilutionPrecision,
            'altitude' => $data->altitude,
            'altitudeUnit' => $data->altitudeUnit,
            'geoidalSeparation' => $data->geoidalSeparation,
            'geoidalSeparationUnit' => $data->geoidalSeparationUnit,
            'ageGpsData' => $data->ageGpsData,
            'differentialRefStationId' => $data->differentialRefStationId,
        ]
    ]);
});
