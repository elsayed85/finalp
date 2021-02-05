<?php

use App\Events\sendPositionEvent;
use App\Http\Controllers\Api\V1\Auth\ForgotPasswordController;
use App\Http\Controllers\Api\V1\Auth\LoginController;
use App\Http\Controllers\Api\V1\Auth\RegisterController;
use App\Http\Controllers\Api\V1\IOT\Car\LocationController as CarLocationController;
use App\Http\Controllers\Api\V1\User\AvatarController;
use App\Http\Controllers\Api\V1\User\CarController;
use App\Http\Controllers\Api\V1\User\HospitalController;
use App\Http\Controllers\Api\V1\User\LocationController;
use App\Http\Controllers\Api\V1\User\LogoutController;
use App\Http\Controllers\Api\V1\User\StatusController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'iot', 'as' => "iot.", 'namespace' => 'IOT'], function () {
    Route::get('test', function (Request $request) {
        Log::alert($request->all());
        return response()->json([
            'data' => $request->all()
        ]);
    });

    Route::get('test2', function (Request $request) {
        $location = $request->location;
        $data = (object)(new BultonFr\NMEA\Parser())->readLine($location)->toArray();
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

    Route::group(['prefix' => 'car', 'namespace' => 'Car', 'as' => 'car.'], function () {
        Route::get('update-location', [CarLocationController::class, "updateCurrentLocation"])->name('update_location');
    });

    Route::match(['post', 'get'], 'send', function (Request $request) {
        $request->validate([
            'lat' => ['required', 'string'],
            'lng' => ['required', 'string']
        ]);

        $config['lat'] = $request->lat; # 30.939293745909936
        $config['lng'] = $request->lng; # 31.29060731951297
        event(new sendPositionEvent($config));
        return response()->json($config);
    });
});

Route::post('register', [RegisterController::class, "register"])->name('register');
Route::post('login', [LoginController::class, "login"])->name('login');
Route::post('reset', [ForgotPasswordController::class, "reset"])->name('reset');

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::group(['prefix' => 'user', 'namespace' => "User"], function () {
        Route::post('logout', [LogoutController::class, "__invoke"])->name('logout');
        Route::post('update-avatar', [AvatarController::class, "__invoke"])->name('update_avatar');
        Route::post('update-location', [LocationController::class, "updateCurrentLocation"])->name('update_location');

        Route::group(['prefix' => 'hospital', 'as' => 'hospital.'], function () {
            Route::get('locations', [HospitalController::class, 'locations'])->name('locations');
        });

        Route::group(['prefix' => 'car', 'as' => 'car.'], function () {
            Route::get('locations', [CarController::class, 'locations'])->name('locations');
        });

        Route::get("drives", "DriveController@index")->name('drive.index');
        Route::post("makedrive", "DriveController@makedrive")->name('makeDrive');
        Route::post("{drive}/change-destination", "DriveController@changeDestination")->name('change_destination');

        Route::group(['prefix' => 'status', 'as' => "status"], function () {
            Route::get('all', [StatusController::class, "all"])->name('all');
            Route::get('email', [StatusController::class, "email"])->name('email');
            Route::get('phone', [StatusController::class, "phone"])->name('phone');
        });
    });
});
