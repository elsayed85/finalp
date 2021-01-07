<?php

use App\Admin;
use App\Models\Appointment;
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

        $user = User::create([
            'email' => "elsayedkamal581999@gmail.com",
            'password' =>  Hash::make("password"),
            'name' => "User sayed"
        ]);

        $user->appointments()->saveMany(factory(Appointment::class, 5)->make());
    }
}
