<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOmraHotelphotoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('omra_hotelphoto', function (Blueprint $table) {
            $table->increments('hph_id')->unsigned();
            $table->string('hph_path');
            $table->integer('hotel_id')->unsigned()->nullable();
            $table->foreign('hotel_id')->references('h_id')->on('omra_hotel');
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
        Schema::dropIfExists('omra_hotelphoto');
    }
}
