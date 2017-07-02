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
        Schema::create('omra_reservations', function (Blueprint $table) {
            $table->increments('res_id')->unsigned();
            $table->integer('visitor_id')->unsigned()->nullable();
            $table->foreign('visitor_id')->references('v_id')->on('omra_visitors');
            $table->integer('package_id')->unsigned()->nullable();
            $table->foreign('package_id')->references('pkg_id')->on('omra_packages');
            $table->integer('travelagency_id')->unsigned()->nullable();
            $table->foreign('travelagency_id')->references('t_id')->on('omra_travelagencies');
            $table->integer('visitorstatus_id')->unsigned()->nullable();
            $table->foreign('visitorstatus_id')->references('vs_id')->on('omra_visitorstatuses');
            $table->integer('visitorvisastatus_id')->unsigned()->nullable();
            $table->foreign('visitorvisastatus_id')->references('vvs_id')->on('omra_visastatuses');
            $table->integer('reservationstatus_id')->unsigned()->nullable();
            $table->foreign('reservationstatus_id')->references('rest_id')->on('omra_reservationstatuses');
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
