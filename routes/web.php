<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {
        Route::view('/', 'welcome')->name("home");

        // patient
        Auth::routes();

        Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
            Route::get('/login', 'AdminAuth\LoginController@showLoginForm')->name('login');
            Route::post('/login', 'AdminAuth\LoginController@login')->name("login.post");
            Route::post('/logout', 'AdminAuth\LoginController@logout')->name('logout');

            Route::post('/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
            Route::post('/password/reset', 'AdminAuth\ResetPasswordController@reset')->name('password.email');
            Route::get('/password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
            Route::get('/password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm')->name('password.resetform');
        });
    }
);
