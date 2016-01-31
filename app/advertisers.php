<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class advertisers extends Model
{
    protected $fillable = array('id', 'user_id', 'surname', 'name', 'address', 'email', 'bank_account', 'last_login', 'mobile', 'home', 'type','created_at', 'updated_at', 'transaction_count', 'dob');
}
