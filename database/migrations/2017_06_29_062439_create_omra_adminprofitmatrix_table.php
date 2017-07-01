<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOmraAdminprofitmatrixTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('omra_adminprofitmatrix', function (Blueprint $table) {
            $table->increments('prof_id')->unsigned();
            $table->string('prof_entityname')->nullable();
            $table->double('prof_globalprofitamount')->nullable();
            $table->double('prof_cardpercentage')->nullable();
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
        Schema::dropIfExists('omra_adminprofitmatrix');
    }
}
