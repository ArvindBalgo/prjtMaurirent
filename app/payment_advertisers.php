<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class payment_advertisers extends Model
{
    protected $fillable = array('id', 'advertisers_id', 'total_amount', 'commission', 'status', 'date_paid');
}
