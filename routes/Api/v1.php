<?php

use App\Http\Controllers\Api\V1\Auth\ForgotPasswordController;
use App\Http\Controllers\Api\V1\Auth\LoginController;
use App\Http\Controllers\Api\V1\Auth\RegisterController;
use App\Http\Controllers\Api\V1\User\AvatarController;
use App\Http\Controllers\Api\V1\User\LogoutController;
use App\Http\Controllers\Api\V1\User\StatusController;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'hardware', 'as' => "hardware."], function () {
    Route::get('test', function () {
        return "hi ardino";
    });
});

Route::post('register', [RegisterController::class, "register"])->name('register');
Route::post('login', [LoginController::class, "login"])->name('login');
Route::post('reset', [ForgotPasswordController::class, "reset"])->name('reset');

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::group(['prefix' => 'user', 'namespace' => "User"], function () {
        Route::post('logout', [LogoutController::class, "__invoke"])->name('logout');
        Route::post('update-avatar', [AvatarController::class, "__invoke"])->name('update_avatar');

        Route::group(['prefix' => 'status', 'as' => "status"], function () {
            Route::get('all', [StatusController::class, "all"])->name('all');
            Route::get('email', [StatusController::class, "email"])->name('email');
            Route::get('phone', [StatusController::class, "phone"])->name('phone');
        });
    });
});
