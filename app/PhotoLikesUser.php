<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\PhotoLikesUser
 *
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @property int $photo_id Id фото
 * @property int $user_id Id пользователя
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PhotoLikesUser newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PhotoLikesUser newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PhotoLikesUser query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PhotoLikesUser whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PhotoLikesUser wherePhotoId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PhotoLikesUser whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PhotoLikesUser whereUserId($value)
 * @mixin \Eloquent
 */
class PhotoLikesUser extends Model
{
    protected $table = 'photo_likes_users';
    protected $fillable = ['photo_id', 'user_id'];
}

