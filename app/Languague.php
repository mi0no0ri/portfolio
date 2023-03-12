<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Languague extends Model
{
    protected $fillable = [
        'post_id',
        'languague',
    ];
    public function post()
    {
        return $this->belongsTo('App\Post');
    }
}
