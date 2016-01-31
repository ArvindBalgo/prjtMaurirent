<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class payment_clients extends Model
{
    protected $fillable = array('id', 'asset_id', 'no_persons', 'uni_price', 'total_price', 'discount', 'net_price', 'checkin_time', 'checkout_time', 'checkin_date', 'checkout_date', 'no_days', 'process_status', 'date_cancelled');

}
