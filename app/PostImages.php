<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostImages extends Model
{
    protected $guared = [];

    public function post(){
        return $this->belongsTo('App\Post');
    }
}
