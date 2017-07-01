<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOmraHotelemployeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('omra_hotelemployee', function (Blueprint $table) {
            $table->increments('he_id')->unsigned();
            $table->string('he_fname',30)->nullable();
            $table->string('he_lname',30)->nullable();
            $table->string('he_email')->unique();
            $table->string('he_password');
            $table->integer('role_id')->unsigned()->default(5);
            $table->foreign('role_id')->references('r_id')->on('omra_role');
            $table->boolean('isactive')->default(false);
            $table->integer('hotel_id')->unsigned();
            $table->foreign('hotel_id')->references('h_id')->on('omra_hotel)');
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
        Schema::dropIfExists('omra_hotelemployee');
    }
}
