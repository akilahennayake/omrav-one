<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOmraPlanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('omra_plan', function (Blueprint $table) {
            $table->increments('pl_id');
            $table->integer('hotel_id')->unsigned()->nullable();
            $table->foreign('hotel_id')->references('h_id')->on('omra_hotel');
            $table->integer('bookingwindow_id')->unsigned()->nullable();
            $table->foreign('bookingwindow_id')->references('bkw_bookingwindowid')->on('omra_bookingwindow');
            $table->integer('roomtype_id')->unsigned()->nullable();
            $table->foreign('roomtype_id')->references('rmt_id')->on('omra_roomtype');
            $table->double('pl_baseprice')->nullable();
            $table->double('pl_bnbprice')->nullable();
            $table->double('pl_hbprice')->nullable();
            $table->double('pl_fbprice')->nullable();
            $table->date('pl_begindate')->nullable();
            $table->date('pl_enddate')->nullable();
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
        Schema::dropIfExists('omra_plan');
    }
}
