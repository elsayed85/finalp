<?php

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
