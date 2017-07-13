<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOmraHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('omra_hotels', function (Blueprint $table) {
            $table->increments('h_id')->unsigned();
            $table->string('h_hotelname',100)->nullable();
            $table->string('h_registerednumberincountry',100)->nullable();
            $table->integer('h_telephone')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('h_distancetoharam')->unsigned()->nullable();
            $table->string('h_nearestgatename',80)->nullable();
            $table->string('h_hotellogophotopath')->nullable();
            $table->integer('h_faxnumber')->unsigned()->nullable();
            $table->integer('role_id')->unsigned()->default(4);
            $table->foreign('role_id')->references('r_id')->on('omra_roles');
            $table->boolean('h_isactive')->default(false);
//            $table->integer('hotel_profit_id')->unsigned()->nullable();
//            $table->foreign('hotel_profit_id')->references('hp_id')->on('omra_hotelprofit');
            $table->integer('city_id')->unsigned();
            $table->foreign('city_id')->references('ct_id')->on('omra_cities');
            $table->integer('starrating_id')->unsigned();
            $table->foreign('starrating_id')->references('st_id')->on('omra_starratings');
//            $table->integer('promotion_id')->unsigned();
//            $table->foreign('promotion_id')->references('pr_id')->on('omra_promotion');
            $table->rememberToken();
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
        Schema::dropIfExists('omra_hotels');
    }
}
