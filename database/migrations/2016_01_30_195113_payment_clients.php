<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PaymentClients extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_clients', function(Blueprint $table){
            $table->increments('id');
            $table->bigInteger('asset_id');
            $table->integer('no_persons');
            $table->double('unit_price');
            $table->double('total_price');
            $table->double('discount');
            $table->double('net_price');
            $table->time('checkin_time');
            $table->time('checkout-time');
            $table->date('checkin_date');
            $table->date('checkout_date');
            $table->integer('no_days');
            $table->string('process_status'); //confirmed,  cancelled, completed
            $table->dateTime('date_cancelled');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('payment_clients');
    }
}
