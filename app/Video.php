<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Video
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @property string $path Путь к видео
 * @property int $likes_count Количество лайков
 * @property int $pet_id Id животного
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Video newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Video newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Video query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Video whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Video whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Video whereLikesCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Video wherePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Video wherePetId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Video whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Video extends Model
{
    protected $table = 'videos';
    protected $fillable = ['path', 'likes_count', 'pet_id'];
}
