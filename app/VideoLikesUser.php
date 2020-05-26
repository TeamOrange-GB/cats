<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VideoLikesUser extends Model
{
    protected $table = 'video_likes_users';
    protected $fillable = ['video_id', 'user_id'];
}
