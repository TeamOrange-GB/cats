<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    protected $table = 'pets';
    protected $fillable = [
        'birthday_at',
        'gender',
        'mating',
        'name_real',
        'name_doc',
        'titles',
        'description',
        'pedigree',
        'certificate',
        'veterinary_certificate',
        'metrics',
        'likes_count',
        'awards_site',
        'awards',
        'status',
        'species_id',
        'breed_id',
        'color_id',
        'user_id',
    ];
}
