<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    protected $fillable=array('id', 'password', 'last_login', 'access_type', 'date_created', 'date_modified');
}
