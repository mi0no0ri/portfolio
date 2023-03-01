<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Functions extends Model
{
    public function post()
    {
        return $this->belongsTo('App\Post');
    }
}
