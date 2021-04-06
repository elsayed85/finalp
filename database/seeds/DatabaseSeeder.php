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
            'email' => "test@gmail.com",
            'password' =>  Hash::make("password"),
            'name' => "Admin sayed",
        ]);

        $hospital = Hospital::create([
            'email' => "test@gmail.com",
            'password' =>  Hash::make("password"),
            'name' => "Admin sayed",
        ]);

        $hospital->location()->create(['lat' => '31.043084529096628', 'lng' => '31.35235957295868']);

        $user = User::create([
            'email' => "test@gmail.com",
            'password' =>  Hash::make("password"),
            'name' => "User sayed",
            'email_verified_at' => now(),
            'lat' => '31.043084529096628', 'lng' => '31.35235957295868'
        ]);

        $user->appointments()->saveMany(factory(Appointment::class, 5)->make());

        $this->call([
            MedicalSpecialtiesSeeder::class
        ]);

        factory(Hospital::class, 500)->create(); # ceach hospital has 3 cars
        factory(Car::class, 40)->create(); # each hospital has 3 cars
        factory(User::class, 5)->create(); # reate patients

        Car::create([
            'is_available' => true,
            'lat' => rand(10,20),
            'lng' => rand(10,20),
            'public_key' => "1",
            'private_key' =>  Hash::make("1")
        ]);


        // $this->call(simulateCarMovemntsSeeder::class);
    }
}
