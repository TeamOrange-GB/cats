<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\PossibleBreed
 *
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @property int $species_id Id вида
 * @property int $breeds_id Id окраса
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PossibleBreed newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PossibleBreed newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PossibleBreed query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PossibleBreed whereBreedsId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PossibleBreed whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PossibleBreed whereSpeciesId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PossibleBreed whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class PossibleBreed extends Model
{
    protected $table = 'possible_breeds';
    protected $fillable = ['species_id', 'breeds_id'];
}
