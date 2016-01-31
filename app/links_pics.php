<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class links_pics extends Model
{
    protected $fillable = array('id', 'advertisers_id', 'asset_id', 'index', 'path', 'date_uploaded');
}
