<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Reviews extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('reviews', function(Blueprint $table){
            $table->increments('id');
            $table->bigInteger('client_id');
            $table->string('message');
            $table->integer('rating');
            $table->string('reviewed'); //not yet reviewed, reviewed blocked, spam etc
            $table->boolean('blacklist');
            $table->integer('likes_count');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('reviews');
    }
}
