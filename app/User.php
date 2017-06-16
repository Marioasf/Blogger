<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function users()
    {
        return $this->hasMany('App\User');
    }
    public function image()
    {
        return $this->hasOne('App\Image', 'id', 'image_id');
    }
    public function comments()
    {
        return $this->hasMany('App\Comment', 'id', 'user_id');
    }
    public function replies()
    {
        return $this->hasMany('App\Reply', 'id', 'user_id');
    }
}
