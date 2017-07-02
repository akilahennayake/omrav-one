<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOmraPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('omra_plans', function (Blueprint $table) {
            $table->increments('pl_id');
            $table->integer('hotel_id')->unsigned()->nullable();
            $table->foreign('hotel_id')->references('h_id')->on('omra_hotels');
            $table->integer('bookingwindow_id')->unsigned()->nullable();
            $table->foreign('bookingwindow_id')->references('bkw_bookingwindowid')->on('omra_bookingwindows');
            $table->integer('roomtype_id')->unsigned()->nullable();
            $table->foreign('roomtype_id')->references('rmt_id')->on('omra_roomtypes');
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
        Schema::dropIfExists('omra_plans');
    }
}
