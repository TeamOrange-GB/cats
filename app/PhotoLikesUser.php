<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhotoLikesUser extends Model
{
    protected $table = 'photo_likes_users';
    protected $fillable = ['photo_id', 'user_id'];
}

