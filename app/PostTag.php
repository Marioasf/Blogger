<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostTag extends Model
{
    public function post()
    {
        return $this->hasOne('App\Post', 'post_id');
    }

    public function tag()
    {
        return $this->hasOne('App\Tag', 'id', 'tag_id');
    }
}
