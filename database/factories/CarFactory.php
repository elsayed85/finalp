<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Drive\Car;
use Faker\Generator as Faker;

$factory->define(Car::class, function (Faker $faker) {
    return [
        "is_available" => true,
        'lat' => $faker->latitude,
        'lng' => $faker->longitude,
    ];
});


$factory->afterCreating(Car::class, function (Car $car, Faker $faker) {
    $car->setToken($car->id . "|" . str_random(50))->save();
});
