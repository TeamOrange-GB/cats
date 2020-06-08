<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\VideoLikesUser
 *
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @property int $video_id Id видео
 * @property int $user_id Id пользователя
 * @method static \Illuminate\Database\Eloquent\Builder|\App\VideoLikesUser newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\VideoLikesUser newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\VideoLikesUser query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\VideoLikesUser whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\VideoLikesUser whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\VideoLikesUser whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\VideoLikesUser whereVideoId($value)
 * @mixin \Eloquent
 */
class VideoLikesUser extends Model
{
    protected $table = 'video_likes_users';
    protected $fillable = ['video_id', 'user_id'];
}
