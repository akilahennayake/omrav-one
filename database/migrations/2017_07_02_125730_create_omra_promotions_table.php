<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOmraPromotionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('omra_promotions', function (Blueprint $table) {
            $table->increments('promo_autoid')->unsigned();
            $table->integer('pr_id')->unsigned();
            $table->integer('promotiontype_id')->unsigned()->nullable();
            $table->foreign('promotiontype_id')->references('prot_promotiontypeid')->on('omra_promotiontypes');
            $table->double('pr_baseprice')->nullable();
            $table->double('pr_bnbprice')->nullable();
            $table->double('pr_hbprice')->nullable();
            $table->double('pr_fbprice')->nullable();
            $table->date('pr_startdate')->nullable();
            $table->date('pr_enddate')->nullable();
            $table->integer('roomtype_id')->unsigned()->nullable();
            $table->foreign('roomtype_id')->references('rmt_id')->on('omra_roomtypes');
            $table->integer('hotel_id')->unsigned()->nullable();
            $table->foreign('hotel_id')->references('h_id')->on('omra_hotels');
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
        Schema::dropIfExists('omra_promotions');
    }
}
