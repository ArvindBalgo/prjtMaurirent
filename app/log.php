<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class log extends Model
{
    protected $fillable = array('id', 'events', 'description', 'created_at', 'updated_at');
}
