<?php

use App\Admin;
use App\Hospital;
use App\Models\Appointment;
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

        Hospital::create([
            'email' => "elsayedkamal581999@gmail.com",
            'password' =>  Hash::make("password"),
            'name' => "Admin sayed"
        ]);

        $user = User::create([
            'email' => "elsayedkamal581999@gmail.com",
            'password' =>  Hash::make("password"),
            'name' => "User sayed"
        ]);

        $user->appointments()->saveMany(factory(Appointment::class, 5)->make());

        factory(Hospital::class , 20)->create(); # ceach hospital has 3 cars
        factory(User::class , 5)->create(); # create patients


        // $this->call(simulateCarMovemntsSeeder::class);
    }
}
