<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Client extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client', function(Blueprint $table){
            $table->increments('id');
            $table->integer('user_id');
            $table->string('surname');
            $table->string('name');
            $table->string('nic');
            $table->string('facebook_id');
            $table->boolean('blacklisted');
            $table->bigInteger('gift_points');
            $table->string('remarks');
            $table->string('mobile');
            $table->string('home');
            $table->string('address');
            $table->timestamps();
            $table->date('dob');
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
        Schema::drop('client');
    }
}
