<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title', 'content',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function post_tags()
    {
        return $this->hasMany('App\PostTag', 'post_id', 'id');
    }

    public function image_posts()
    {
        return $this->hasMany('App\ImagePost', 'post_id', 'id');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}
