<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOmraTravelagencyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('omra_travelagency', function (Blueprint $table) {
            $table->increments('t_id')->unique()->index()->unsigned();
            $table->string('t_countryregistrationnumber');
            $table->string('t_name');
            $table->integer('t_telephone')->unsigned();
            $table->integer('t_faxnumber')->unsigned()->nullable();
            $table->string('t_email')->unique();
            $table->string('t_password');
            $table->string('t_ownerpassportnumber');
            $table->string('t_owneridphotopath');
            $table->string('t_building');
            $table->string('t_logophotopath');
            $table->integer('country_id');
            $table->foreign('country_id')->references('c_id')->on('omra_country');
            $table->integer('role_id')->default(1);
            $table->foreign('role_id')->references('r_id')->on('omra_role');
            $table->boolean('t_isactive')->default(false);
            $table->string('t_city');

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
        Schema::dropIfExists('omra_travelagency');
    }
}
