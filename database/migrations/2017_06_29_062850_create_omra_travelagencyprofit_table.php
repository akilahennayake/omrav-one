<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOmraTravelagencyprofitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('omra_travelagencyprofits', function (Blueprint $table) {
            $table->increments('tap_id')->unsigned();
            $table->integer('travelagency_id')->unsigned()->nullable();
            $table->foreign('travelagency_id')->references('t_id')->on('omra_travelagencies');
            $table->integer('profitentity_id')->unsigned()->nullable();
            $table->foreign('profitentity_id')->references('prof_id')->on('omra_adminprofitsetups');
            $table->double('tap_profitamount')->nullable();

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
        Schema::dropIfExists('omra_travelagencyprofit');
    }
}
