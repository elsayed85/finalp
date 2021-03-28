<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->boolean('is_available')->default(false);
            $table->double('lat')->nullable();
            $table->double('lng')->nullable();
            $table->string('public_key')->unique();
            $table->string('private_key')->unique();
            $table->unsignedBigInteger('current_patient_id')->nullable();
            $table->foreign('current_patient_id')->on('users')->references('id')->nullOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
}
