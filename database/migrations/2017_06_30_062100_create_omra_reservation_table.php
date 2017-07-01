<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOmraReservationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('omra_reservation', function (Blueprint $table) {
            $table->increments('res_id')->unsigned();
            $table->integer('visitor_id')->unsigned()->nullable();
            $table->foreign('visitor_id')->references('v_id')->on('omra_visitor');
            $table->integer('package_id')->unsigned()->nullable();
            $table->foreign('package_id')->references('pkg_id')->on('omra_package');
            $table->integer('travelagency_id')->unsigned()->nullable();
            $table->foreign('travelagency_id')->references('t_id')->on('omra_travelagency');
//            $table->integer('visitorstatus_id')->unsigned()->nullable();
//            $table->foreign('visitorstatus_id')->references('vs_id')->on('omra_visitorstatus');
//            $table->integer('visitorvisastatus_id')->unsigned()->nullable();
//            $table->foreign('visitorvisastatus_id')->references('vvs_id')->on('omra_visastatus');
//            $table->integer('reservationstatus_id')->unsigned()->nullable();
//            $table->foreign('reservationstatus_id')->references('rest_id')->on('omra_visitor');
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
        Schema::dropIfExists('omra_reservation');
    }
}
