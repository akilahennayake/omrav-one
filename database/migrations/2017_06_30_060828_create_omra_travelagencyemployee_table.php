<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOmraTravelagencyemployeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('omra_travelagencyemployee', function (Blueprint $table) {
            $table->increments('te_id')->unsigned();
            $table->string('te_fname');
            $table->string('te_lname');
            $table->string('te_email')->unique();
            $table->string('te_password');
            $table->boolean('te_isactive')->default(false);
            $table->foreign('travelagency_id')->references('t_id')->on('omra_travelagency');
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
        Schema::dropIfExists('omra_travelagencyemployee');
    }
}
