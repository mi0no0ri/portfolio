<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'id',
        'user_id',
        'photo',
        'title',
        'description',
    ];
    public function postdetails()
    {
        return $this->hasMany('App\Postdetails', 'post_id', 'id');
    }
    public function languague()
    {
        return $this->hasMany('App\Languague', 'post_id', 'id');
    }
    public function functions()
    {
        return $this->hasMany('App\Functions', 'post_id', 'id');
    }
}
