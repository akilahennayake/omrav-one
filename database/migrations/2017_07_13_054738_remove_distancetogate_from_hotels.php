<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RemoveDistancetogateFromHotels extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('omra_hotels', function (Blueprint $table) {
            //
            $table->dropColumn('h_nearestgatename');
            $table->integer('nearestgate_id')->unsigned();
            $table->foreign('nearestgate_id')->references('gate_id')->on('omra_gates');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('omra_hotels', function (Blueprint $table) {
            //
            $table->string('h_nearestgatename',80)->nullable();
        });
    }
}
