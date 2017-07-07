<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOmraVisitorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('omra_visitors', function (Blueprint $table) {
            $table->increments('v_id')->index()->unsigned();
            $table->string('v_email')->unique();
            $table->string('v_fname',50)->nullable();
            $table->string('v-lname',50)->nullable();
            $table->date('v_dob')->nullable();
            $table->string('v_residentcity',50)->nullable();
            $table->integer('v_mobile')->unsigned();
            $table->integer('v_homephone')->unsigned()->nullable();
            $table->string('v_profilephotopath')->nullable();
            $table->string('password');
            $table->integer('nationality_id')->unsigned();
            $table->foreign('nationality_id')->references('n_id')->on('omra_nationalities');
            $table->integer('gender_id')->unsigned()->nullable();
            $table->foreign('gender_id')->references('g_id')->on('omra_genders');
            $table->integer('country_id')->unsigned();
            $table->foreign('country_id')->references('c_id')->on('omra_countries');
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
        Schema::dropIfExists('omra_visitors');
    }
}
