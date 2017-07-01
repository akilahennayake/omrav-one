<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOmraHotelprofitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('omra_hotelprofit', function (Blueprint $table) {
            $table->increments('hp_id')->unsigned();
            $table->integer('hotel_id')->unsigned()->nullable();
            $table->foreign('hotel_id')->references('h_id')->on('omra_hotel');
            $table->integer('profitentity_id')->unsigned()->nullable();
            $table->foreign('profitentity_id')->references('prof_id')->on('omra_adminprofitmatrix');
            $table->double('hp_profitamount')->nullable();
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
        Schema::dropIfExists('omra_hotelprofit');
    }
}
