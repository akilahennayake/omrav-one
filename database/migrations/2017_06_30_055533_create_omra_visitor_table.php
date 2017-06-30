<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOmraVisitorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('omra_visitor', function (Blueprint $table) {
            $table->increments('v_id')->unique()->index()->unsigned();
            $table->string('v_email')->unique();
            $table->string('v_fname');
            $table->string('v-lname');
            $table->date('v_dob');
            $table->string('v_residentcity');
            $table->integer('v_mobile')->unsigned();
            $table->integer('v_homephone')->unsigned();
            $table->string('v_profilephotopath');
            $table->string('password');
            $table->integer('nationality_id');
            $table->foreign('nationality_id')->references('n_id')->on('omra_nationality');
            $table->integer('gender_id');
            $table->foreign('gender_id')->references('g_id')->on('omra_gender');
            $table->integer('country_id');
            $table->foreign('country_id')->references('c_id')->on('omra_country');
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
        Schema::dropIfExists('omra_visitor');
    }
}
