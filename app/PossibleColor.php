<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PossibleColor extends Model
{
    protected $table = 'possible_colors';
    protected $fillable = ['species_id', 'colors_id'];
}

