<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Hospital\MedicalSpecialties;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(MedicalSpecialties::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'parent_id' => null
    ];
});


$factory->afterCreating(MedicalSpecialties::class, function (MedicalSpecialties $med ,  Faker $faker) {
    $med->childs()->saveMany(factory(MedicalSpecialties::class , 10)->make());
});
