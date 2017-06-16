<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    public function comment()
    {
        return $this->belongsToOne('App\Comment');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
