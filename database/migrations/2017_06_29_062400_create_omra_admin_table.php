<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOmraAdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('omra_admins', function (Blueprint $table) {
            $table->increments('admin_id')->unsigned();
            $table->string('admin_fname',50)->nullable();
            $table->string('admin_lname',50)->nullable();
            $table->string('admin_email',100);
            $table->string('admin_password');
            $table->integer('admin_mobile')->nullable();
            $table->string('admin_photopath')->nullable();


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
        Schema::dropIfExists('omra_admin');
    }
}
