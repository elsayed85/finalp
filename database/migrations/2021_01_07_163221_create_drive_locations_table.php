<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDriveLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drive_locations', function (Blueprint $table) {
            $table->id();
            $table->double('d_lat');
            $table->double('d_lng');
            $table->unsignedBigInteger('drive_id');
            $table->foreign('drive_id')->on('drives')->references('id')->cascadeOnDelete()->cascadeOnUpdate();
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
        Schema::dropIfExists('drive_locations');
    }
}
