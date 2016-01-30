<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Assets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assets', function(Blueprint $table){
            $table->increments('id');
            $table->string('type');
            $table->string('description');
            $table->double('price');
            $table->string('name');
            $table->string('location');
            $table->double('latitude');
            $table->double('longitude');
            $table->integer('ratings_count');
            $table->integer('capacity');
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
        Schema::drop('assets');
    }
}
