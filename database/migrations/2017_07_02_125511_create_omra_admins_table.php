<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOmraAdminsTable extends Migration
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
            $table->string('fname',50)->nullable();
            $table->string('lname',50)->nullable();
            $table->string('email',100)->unique();
            $table->string('password');
            $table->integer('mobile')->nullable();
            $table->string('photopath')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('omra_admins');
    }
}
