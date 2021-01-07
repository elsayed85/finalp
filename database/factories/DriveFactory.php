<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Drive\Car;
use App\Models\Drive\Drive;
use App\User;
use Faker\Generator as Faker;

$factory->define(Drive::class, function (Faker $faker) {
    return [
        "s_lat" => $faker->latitude,
        's_lng' => $faker->longitude,
        "car_id" => Car::Available()->get()->random(),
        'user_id' => User::all()->random(),
        'notes' => $faker->paragraph()
    ];
});
