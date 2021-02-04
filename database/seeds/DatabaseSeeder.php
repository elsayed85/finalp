<?php

use App\Admin;
use App\Hospital;
use App\Models\Appointment;
use App\Models\Drive\Car;
use App\Models\Drive\Drive;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'email' => "elsayedkamal581999@gmail.com",
            'password' =>  Hash::make("password"),
            'name' => "Admin sayed"
        ]);

        $hospital = Hospital::create([
            'email' => "elsayedkamal581999@gmail.com",
            'password' =>  Hash::make("password"),
            'name' => "Admin sayed",
        ]);

        $hospital->location()->create(['lat' => '31.043084529096628', 'lng' => '31.35235957295868']);

        $user = User::create([
            'email' => "elsayedkamal581999@gmail.com",
            'password' =>  Hash::make("password"),
            'name' => "User sayed",
            'lat' => '31.043084529096628', 'lng' => '31.35235957295868'
        ]);

        $user->appointments()->saveMany(factory(Appointment::class, 5)->make());

        $this->call([
            MedicalSpecialtiesSeeder::class
        ]);

        factory(Hospital::class, 500)->create(); # ceach hospital has 3 cars
        factory(Car::class, 40)->create(); # each hospital has 3 cars
        Car::first()->setToken('1|BVnIlm1p0NOIgWd3qohV1HJoUKQ1oo0Dvx4MhawzcNF9QmSCAh')->save();
        factory(User::class, 5)->create(); # reate patients


        $this->call(simulateCarMovemntsSeeder::class);
    }
}
