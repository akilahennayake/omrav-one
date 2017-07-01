<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOmraPackageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('omra_package', function (Blueprint $table) {
            $table->increments('pkg_id')->unsigned();
            $table->string('pkg_name',60)->nullable();
            $table->integer('hotel_id1')->nullable()->unsigned();
            $table->foreign('hotel_id1')->references('h_id')->on('omra_hotel');
            $table->integer('hotel_id2')->nullable()->unsigned();
            $table->foreign('hotel_id2')->references('h_id')->on('omra_hotel');
            $table->integer('pkg_durationhotel1')->nullable();
            $table->integer('pkg_durationhotel2')->nullable();
            $table->double('pkg_totalprice')->nullable();
//            $table->integer('route_id')->unsigned()->nullable();
//            $table->foreign('route_id')->references('rt_id')->on('omra_route');
//            $table->integer('packagerate_id')->unsigned()->nullable();
//            $table->foreign('packagerate_id')->references('pkgrt_id')->on('omra_packagerating');
            $table->integer('nationality_id')->unsigned()->nullable();
            $table->foreign('nationality_id')->references('n_id')->on('omra_nationality');
            $table->integer('pkg_adults')->nullable();
            $table->integer('pkg_children')->nullable();
            $table->date('pkg_startdate')->nullable();
            $table->date('pkg_enddate')->nullable();
            $table->integer('pkg_numberofroomhotelid1')->nullable();
            $table->integer('pkg_numberofroomhotelid2')->nullable();
            $table->integer('hotel1roomtype_id')->unsigned()->nullable();
            $table->foreign('hotel1roomtype_id')->references('rmt_id')->on('omra_roomtype');
            $table->integer('hotel2roomtype_id')->unsigned()->nullable();
            $table->foreign('hotel2roomtype_id')->references('rmt_id')->on('omra_roomtype');
            $table->date('pkg_expirydate')->nullable();
//            $table->integer('packagestatus_id')->unsigned()->nullable();
//            $table->foreign('packagestatus_id')->references('pkgstatus_id')->on('omra_packagestatus');
//            $table->integer('plan_id')->unsigned()->nullable();
//            $table->foreign('plan_id')->references('pl_id')->on('omra_plan');
//            $table->integer('payment_id')->unsigned()->nullable();
//            $table->foreign('payment_id')->references('py_paymentid')->on('omra_payments');
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
        Schema::dropIfExists('omra_package');
    }
}
