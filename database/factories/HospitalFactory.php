<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Hospital;
use App\Models\Drive\Car;
use App\Models\Hospital\MedicalSpecialties;
use Faker\Generator as Faker;

$factory->define(Hospital::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});


$factory->afterCreating(Hospital::class, function (Hospital $hospital, Faker $faker) {
    # every hospital has one location
    $hospital->location()->create([
        'lat' => $faker->latitude,
        'lng' => $faker->longitude
    ]);

    $hospital->specialties()->sync(MedicalSpecialties::all()->random(rand(6,10)));
});
