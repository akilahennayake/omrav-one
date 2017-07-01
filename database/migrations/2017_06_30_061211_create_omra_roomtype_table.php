<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOmraRoomtypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('omra_roomtype', function (Blueprint $table) {
            $table->increments('rmt_id')->unsigned();
            $table->integer('hotel_id')->unsigned()->nullable();
            $table->foreign('hotel_id')->references('h_id')->on('omra_hotel');
            $table->string('rmt_name',100)->nullable();
            $table->integer('rmt_numberofrooms')->nullable();
            $table->integer('rmt_roomsize')->nullable();
            $table->integer('bedtype_id')->unsigned()->nullable();
            $table->foreign('bedtype_id')->references('bdt_id')->on('omra_bedtype');
            $table->integer('rmt_maxoccupancy')->nullable();
            $table->integer('roomtypename_id')->nullable()->unsigned();
            $table->foreign('roomtypename_id')->references('rmtn_id')->on('omra_roomtypename');
            $table->boolean('rmt_availability')->default(true);
            $table->boolean('rmt_smokingallowed')->default(false);
            $table->boolean('rmt_childrenallowed')->default(true);
            $table->boolean('rmt_wakeupserviceavailable')->default(true);
            $table->time('rmt_checkintime')->nullable();
            $table->time('rmt_checkouttime')->nullable();
            $table->integer('promotion_id')->unsigned()->nullable();
            $table->foreign('promotion_id')->references('pr_id')->on('omra_promotion');
            $table->integer('plan_id')->unsigned()->nullable();
            $table->foreign('plan_id')->references('pl_id')->on('omra_plan');


//            $table->integer('roomphotopath_id')->unsigned()->nullable();
//            $table->foreign('roomphotopath_id')->references('rmph_id')->on('omra_roomphoto');
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
        Schema::dropIfExists('omra_roomtype');
    }
}
