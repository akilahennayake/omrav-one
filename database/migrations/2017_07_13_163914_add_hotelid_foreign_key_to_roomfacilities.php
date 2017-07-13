<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddHotelidForeignKeyToRoomfacilities extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('omra_roomfacilities', function (Blueprint $table) {
            //
            $table->integer('hotel_id')->unsigned()->nullable()->after('rf_id');
            $table->foreign('hotel_id')->references('h_id')->on('omra_hotels');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('omra_roomfacilities', function (Blueprint $table) {
            //
            $table->dropColumn('hotel_id');
        });
    }
}
