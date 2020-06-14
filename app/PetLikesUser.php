<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\PetLikesUser
 *
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @property int $pet_id Id животного
 * @property int $user_id Id пользователя
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PetLikesUser newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PetLikesUser newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PetLikesUser query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PetLikesUser whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PetLikesUser wherePetId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PetLikesUser whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PetLikesUser whereUserId($value)
 * @mixin \Eloquent
 */
class PetLikesUser extends Model
{
    protected $table = 'pet_likes_users';
    protected $fillable = ['pet_id', 'user_id'];
}
