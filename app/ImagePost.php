<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImagePost extends Model
{
	public function image()
    {
        return $this->hasOne('App\Image', 'id', 'image_id');
    }

    public function post()
    {
        return $this->hasOne('App\Post', 'post_id');
    }
}
