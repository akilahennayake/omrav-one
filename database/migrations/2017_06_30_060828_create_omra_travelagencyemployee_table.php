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
        Schema::create('omra_travelagencyemployees', function (Blueprint $table) {
            $table->increments('te_id')->unsigned();
            $table->string('te_fname',30)->nullable();
            $table->string('te_lname',30)->nullable();
            $table->string('te_email')->unique();
            $table->string('te_password');
            $table->integer('role_id')->unsigned()->default(3);
            $table->foreign('role_id')->references('r_id')->on('omra_roles');
            $table->boolean('te_isactive')->default(false);
            $table->integer('travelagency_id')->unsigned();
            $table->foreign('travelagency_id')->references('t_id')->on('omra_travelagencies');
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
