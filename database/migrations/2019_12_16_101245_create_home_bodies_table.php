<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomeBodiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_bodies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->mediumtext('body');
            $table->string('about_btn_title');
            $table->string('contact_btn_title');
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
        Schema::dropIfExists('home_bodies');
    }
}
