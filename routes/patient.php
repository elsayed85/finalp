<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', 'HomeController@index')->name('home');


Route::get('test', function () {

})->middleware(['password.confirm']);
