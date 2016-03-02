<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PaymentAdvertisers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_advertisers', function(Blueprint $table){
            $table->increments('id');
            $table->bigInteger('advertisers_id');
            $table->double('total_amount');
            $table->double('commission');
            $table->string('status');//paid, pending ...
            $table->dateTime('date_paid');
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
        Schema::drop('payment_advertisers');
    }
}
