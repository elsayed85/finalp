<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Appointment;
use Faker\Generator as Faker;

$factory->define(Appointment::class, function (Faker $faker) {
    return [
        "title" => $faker->sentence(),
        'description' => $faker->paragraph(),
        'scheduled_at' => now()->addDays(rand(1, 7))
    ];
});
