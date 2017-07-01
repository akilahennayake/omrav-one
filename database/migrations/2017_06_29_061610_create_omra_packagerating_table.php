<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOmraPackageratingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('omra_packagerating', function (Blueprint $table) {
            $table->increments('pkgrt_id')->unsigned();
            $table->integer('pkgrt_totalnumberofstars')->unsigned();
            $table->string('pkgrt_packagestarname');
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
        Schema::dropIfExists('omra_packagerating');
    }
}
