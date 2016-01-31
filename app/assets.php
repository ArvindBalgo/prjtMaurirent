<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class assets extends Model
{
    protected $fillable = array('id', 'type', 'description',  'price', 'name', 'location', 'latitude', 'longitude', 'ratings_count', 'created_at', 'updated_at');
}
