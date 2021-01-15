<?php

use Illuminate\Support\Facades\Route;

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {
        // homepage
        Route::view('/', 'welcome')->name("home");
        Route::view('test', 'test')->name("test");

        // patient
        Auth::routes(['verify' => true]);

        // Hospital
        Route::group(['prefix' => 'hospital', 'as' => 'hospital.'], function () {
            Route::get('/login', 'HospitalAuth\LoginController@showLoginForm')->name('login');
            Route::post('/login', 'HospitalAuth\LoginController@login')->name("login.post");
            Route::post('/logout', 'HospitalAuth\LoginController@logout')->name('logout');

            Route::get('/register', 'HospitalAuth\RegisterController@showRegistrationForm')->name('register');
            Route::post('/register', 'HospitalAuth\RegisterController@register')->name('register.post');

            Route::post('/password/email', 'HospitalAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
            Route::post('/password/reset', 'HospitalAuth\ResetPasswordController@reset')->name('password.email');
            Route::get('/password/reset', 'HospitalAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
            Route::get('/password/reset/{token}', 'HospitalAuth\ResetPasswordController@showResetForm')->name('password.resetform');
        });

        // Admin
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
