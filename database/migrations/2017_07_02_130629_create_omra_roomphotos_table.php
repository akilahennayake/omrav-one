<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOmraRoomphotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('omra_roomphotos', function (Blueprint $table) {
            $table->increments('rmph_id')->unsigned();
            $table->string('rmph_path')->nullable();
            $table->integer('roomtype_id')->nullable()->unsigned();
            $table->foreign('roomtype_id')->references('rmt_id')->on('omra_roomtypes');
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
        Schema::dropIfExists('omra_roomphotos');
    }
}
