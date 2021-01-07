<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Drive\Car;
use Faker\Generator as Faker;

$factory->define(Car::class, function (Faker $faker) {
    return [
        "is_available" => true
    ];
});
