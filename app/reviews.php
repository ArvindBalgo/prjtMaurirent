<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reviews extends Model
{
    protected $fillable = array('id', 'client_id', 'message', 'rating', 'reviewed', 'blacklist', 'likes_count');
}
