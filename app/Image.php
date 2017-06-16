<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
	/*public function post()
    {
        return $this->hasMany('App\Post');
    }*/
    public function image_posts()
    {
        return $this->belongsToOne('App\ImagePost', 'image_id', 'id');
    }

}
