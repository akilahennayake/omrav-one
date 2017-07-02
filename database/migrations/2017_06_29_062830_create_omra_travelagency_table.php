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
        Schema::create('omra_travelagencies', function (Blueprint $table) {
            $table->increments('t_id')->unique()->index()->unsigned();
            $table->string('t_countryregistrationnumber',100)->nullable();
            $table->string('t_name',100)->nullable();
            $table->integer('t_telephone')->unsigned()->nullable();
            $table->integer('t_faxnumber')->unsigned()->nullable();
            $table->string('t_email')->unique();
            $table->string('t_password');
            $table->string('t_ownerpassportnumber',20)->nullable();
            $table->string('t_owneridphotopath')->nullable();
            $table->string('t_building',50)->nullable();
            $table->string('t_logophotopath')->nullable();
            $table->integer('country_id')->unsigned();
            $table->foreign('country_id')->references('c_id')->on('omra_countries');
            $table->integer('role_id')->unsigned()->default(2);
            $table->foreign('role_id')->references('r_id')->on('omra_roles');
            $table->boolean('t_isactive')->default(false);
            $table->string('t_city',50)->nullable();
            $table->rememberToken();
//            $table->integer('ta_profit_id')->unsigned()->nullable();
//            $table->foreign('ta_profit_id')->references('tap_id')->on('omra_travelagencyprofit');
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
