<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\PossibleColor
 *
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @property int $species_id Id вида
 * @property int $colors_id Id окраса
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PossibleColor newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PossibleColor newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PossibleColor query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PossibleColor whereColorsId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PossibleColor whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PossibleColor whereSpeciesId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PossibleColor whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class PossibleColor extends Model
{
    protected $table = 'possible_colors';
    protected $fillable = ['species_id', 'colors_id'];
}

