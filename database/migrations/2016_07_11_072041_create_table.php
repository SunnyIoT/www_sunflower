<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('tb_user', function (Blueprint $table) {
            $table->increments('id');
            $table->string('serial')->unique();
            $table->string('username')->unique();
            $table->string('password');
            $table->string('tel')->unique();
            $table->string('email')->unique();
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
        //
        Schema::drop('tb_user');
    }
}
