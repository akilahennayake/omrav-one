<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOmraHotelfacilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('omra_hotelfacilities', function (Blueprint $table) {
            $table->increments('hf_id')->unsigned();
            $table->integer('hotel_id')->unsigned()->nullable();
            $table->foreign('hotel_id')->references('h_id')->on('omra_hotel');
            $table->integer('hf_totalnumberofrooms')->nullable();
            $table->boolean('hf_swimmingpool')->default(false)->nullable();
            $table->boolean('hf_freeparking')->default(false)->nullable();
            $table->boolean('hf_restaurant')->default(false)->nullable();
            $table->boolean('hf_spa')->default(false)->nullable();
            $table->boolean('hf_prayerarea')->default(false)->nullable();
            $table->boolean('hf_sauna')->default(false)->nullable();
            $table->boolean('hf_steamroom')->default(false)->nullable();
            $table->boolean('hf_gym')->default(false)->nullable();
            $table->boolean('hf_jacuzzi')->default(false)->nullable();
            $table->boolean('hf_lifts')->default(false)->nullable();
            $table->boolean('hf_currencyexchange')->default(false)->nullable();
            $table->boolean('hf_atm')->default(false)->nullable();
            $table->boolean('hf_24hfrontdesk')->default(false)->nullable();
            $table->boolean('hf_garden')->default(false)->nullable();
            $table->boolean('hf_terrace')->default(false)->nullable();
            $table->boolean('hf_childrenplayarea')->default(false)->nullable();
            $table->boolean('hf_daycare')->default(false)->nullable();
            $table->boolean('hf_library')->default(false)->nullable();
            $table->boolean('hf_disabledfriendly')->default(false)->nullable();
            $table->boolean('hf_lounge')->default(false)->nullable();
            $table->boolean('hf_laundry')->default(false)->nullable();
            $table->boolean('hf_giftshop')->default(false)->nullable();
            $table->boolean('hf_smokingarea')->default(false)->nullable();
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
        Schema::dropIfExists('omra_hotelfacilities');
    }
}
