<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function post_tags()
    {
        return $this->belongsToMany('App\PostTag', 'tag_id', 'id');
    }
}
