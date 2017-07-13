<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOmraHotelemployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('omra_hotelemployees', function (Blueprint $table) {
            $table->increments('he_id')->unsigned();
            $table->string('he_fname',30)->nullable();
            $table->string('he_lname',30)->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('role_id')->unsigned()->default(5);
            $table->foreign('role_id')->references('r_id')->on('omra_roles');
            $table->boolean('isactive')->default(false);
            $table->integer('hotel_id')->unsigned()->nullable();
            $table->foreign('hotel_id')->references('h_id')->on('omra_hotels');
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
        Schema::dropIfExists('omra_hotelemployees');
    }
}
