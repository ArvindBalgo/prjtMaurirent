<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Advertisers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('advertisers', function(Blueprint $table){
            $table->increments('id');
            $table->integer('user_id');
            $table->string('surname');
            $table->string('name');
            $table->string('address');
            $table->string('email');
            $table->string('bank_account');
            $table->string('last_login');
            $table->string('mobile');
            $table->string('home');
            $table->string('type');
            $table->timestamps();
            $table->bigInteger('transaction_count');
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
        Schema::drop('advertisers');
    }
}
