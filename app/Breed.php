<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Breed
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @property string $breed Название породы
 * @property string|null $breed_info Информация о породе
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Breed newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Breed newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Breed query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Breed whereBreed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Breed whereBreedInfo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Breed whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Breed whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Breed whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Breed extends Model
{
    protected $table = 'breeds';
    protected $fillable = ['breed', 'breed_info'];
}
