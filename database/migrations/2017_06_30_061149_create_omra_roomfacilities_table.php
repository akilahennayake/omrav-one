<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOmraRoomfacilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('omra_roomfacilities', function (Blueprint $table) {
            $table->increments('rf_id')->unsigned();
//            $table->integer('roomtype_id')->unsigned()->nullable();
//            $table->foreign('roomtype_id')->references('rt_id')->on('omra_roomtype');
            $table->boolean('rf_locker')->default(false)->nullable();
            $table->boolean('rf_snackbar')->default(false)->nullable();
            $table->boolean('rf_tv')->default(false)->nullable();
            $table->boolean('rf_satchannels')->default(false)->nullable();
            $table->boolean('rf_wifi')->default(false)->nullable();
            $table->boolean('rf_radio')->default(false)->nullable();
            $table->boolean('rf_dvdplayer')->default(false)->nullable();
            $table->boolean('rf_bathtub')->default(false)->nullable();
            $table->boolean('rf_telephone')->default(false)->nullable();
            $table->boolean('rf_ac')->default(false)->nullable();
            $table->boolean('rf_soundproof')->default(false)->nullable();
            $table->boolean('rf_cotforchildren')->default(false)->nullable();
            $table->boolean('rf_clothesrack')->default(false)->nullable();
            $table->boolean('rf_wardrobe')->default(false)->nullable();
//            $table->integer('floortype_id')->nullable();
//            $table->foreign('floortype_id')->references('fl_id')->on('omra_floortype');
            $table->boolean('rf_clothesiron')->default(false)->nullable();
            $table->boolean('rf_privateentrance')->default(false)->nullable();
            $table->boolean('rf_sofa')->default(false)->nullable();
            $table->boolean('rf_washingmachine')->default(false)->nullable();
            $table->boolean('rf_fridge')->default(false)->nullable();
            $table->boolean('rf_kettle')->default(false)->nullable();
            $table->boolean('rf_microwave')->default(false)->nullable();
            $table->boolean('rf_disabledfriendly')->default(false)->nullable();
            $table->boolean('rf_bathrobes')->default(false)->nullable();
            $table->boolean('rf_freetoileteries')->default(false)->nullable();
            $table->boolean('rf_hairdryer')->default(false)->nullable();
            $table->boolean('rf_shavingkit')->default(false)->nullable();
            $table->boolean('rf_slippers')->default(false)->nullable();
            $table->boolean('rf_sewingkit')->default(false)->nullable();
            $table->boolean('rf_showerkit')->default(false)->nullable();
            $table->boolean('rf_laptop')->default(false)->nullable();
            $table->boolean('rf_diningtable')->default(false)->nullable();
            $table->boolean('rf_coffeemaker')->default(false)->nullable();
            $table->boolean('rf_towels')->default(false)->nullable();
//            $table->integer('viewtype_id')->unsigned();
//            $table->foreign('viewtype_id')->references('vw_id')->on('omra_view');
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
        Schema::dropIfExists('omra_roomfacilities');
    }
}
