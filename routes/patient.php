<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/appointment', 'AppointmentController@index')->name('appointment.index');

Route::get('test', function () {
    //
});
