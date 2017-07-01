<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOmraPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('omra_payments', function (Blueprint $table) {
            $table->increments('py_paymentid')->unsigned();
            $table->integer('visitor_id')->unsigned()->nullable();
            $table->foreign('visitor_id')->references('v_id')->on('omra_visitor');
            $table->integer('package_id')->unsigned()->nullable();
            $table->foreign('package_id')->references('pkg_id')->on('omra_package');
            $table->integer('travelagency_id')->unsigned()->nullable();
            $table->foreign('travelagency_id')->references('t_id')->on('omra_travelagency');
            $table->double('py_paymentamount')->nullable();
            $table->boolean('py_paymentstatus')->default(false);
            $table->date('py_paymentdate')->nullable();
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
        Schema::dropIfExists('omra_payments');
    }
}
