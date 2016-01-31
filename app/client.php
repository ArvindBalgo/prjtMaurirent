<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class client extends Model
{
    protected $fillable = array('id', 'user_id', 'surname', 'name', 'nic', 'facebook_id', 'blacklisted', 'gift_points', 'remarks', 'mobile', 'home', 'address', 'created_at', 'updated_at', 'dob');
}
