<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Drive\Car;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;

$factory->define(Car::class, function (Faker $faker) {
    return [
        "is_available" => true,
        'lat' => $faker->latitude,
        'lng' => $faker->longitude,
        'public_key' => "pk_" . rand(999, 9999999999),
        'private_key' => Hash::make('password')
    ];
});
