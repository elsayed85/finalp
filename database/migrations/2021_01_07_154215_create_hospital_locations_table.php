<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHospitalLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hospital_locations', function (Blueprint $table) {
            $table->id();
            $table->foreignId("hospital_id")->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->double('lat');
            $table->double('lng');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hospital_locations');
    }
}
