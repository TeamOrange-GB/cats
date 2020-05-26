<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PetLikesUser extends Model
{
    protected $table = 'pet_likes_users';
    protected $fillable = ['pet_id', 'user_id'];
}
