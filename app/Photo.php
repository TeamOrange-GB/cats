<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Photo
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @property string $path Путь к фотографии
 * @property int $likes_count Количество лайков
 * @property int $pet_id Id животного
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Photo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Photo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Photo query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Photo whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Photo whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Photo whereLikesCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Photo wherePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Photo wherePetId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Photo whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Photo extends Model
{
    protected $table = 'photos';
    protected $fillable = ['path', 'likes_count', 'pet_id'];
}
