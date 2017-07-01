<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOmraRoomphotoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('omra_roomphoto', function (Blueprint $table) {
            $table->increments('rmph_id')->unsigned();
            $table->string('rmph_path')->nullable();
            $table->ineteger('roomtype_id')->nullable()->unsigned();
            $table->foreign('roomtype_id')->references('rmt_id')->on('omra_roomtype');
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
        Schema::dropIfExists('omra_roomphoto');
    }
}
