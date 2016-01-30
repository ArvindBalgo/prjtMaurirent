<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LinksPics extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('links_pics', function(Blueprint $table){
            $table->increments('id');
            $table->integer('advertisers_id');
            $table->integer('asset_id');
            $table->integer('index');
            $table->string('path');
            $table->dateTime('date_uploaded');
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
        Schema::drop('links_pics');
    }
}
