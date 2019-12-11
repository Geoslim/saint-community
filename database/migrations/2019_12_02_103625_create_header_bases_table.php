<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHeaderBasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('header_bases', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('location');
            $table->string('location_two');
            $table->string('sunday');
            $table->time('sunday_time_one');
            $table->time('sunday_time_two');
            $table->string('mid_day');
            $table->time('mid_day_time');
            $table->string('direction');
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
        Schema::dropIfExists('header_bases');
    }
}
