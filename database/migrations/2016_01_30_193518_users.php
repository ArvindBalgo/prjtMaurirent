<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Users extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*Schema::create('users', function(Blueprint $table){
            $table->increments('id');
            $table->string('password');
            $table->string('last_login');
            $table->string('access_type');
            $table->date('date_created');
            $table->date('date_modified');
    });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
