<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Species
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @property string $species Название вида
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Species newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Species newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Species query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Species whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Species whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Species whereSpecies($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Species whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Species extends Model
{
    protected $table = 'species';
    protected $fillable = ['species'];
}
