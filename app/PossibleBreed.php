<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PossibleBreed extends Model
{
    protected $table = 'possible_breeds';
    protected $fillable = ['species_id', 'breeds_id'];
}
