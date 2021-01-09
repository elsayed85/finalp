<?php

use App\Models\Hospital\MedicalSpecialties;
use Illuminate\Database\Seeder;

class MedicalSpecialtiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(MedicalSpecialties::class , 7)->create();
    }
}
