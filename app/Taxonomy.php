<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Taxonomy extends Model
{
    protected $table = 'taxonomy';
    protected $fillable = ['type', 'name', 'slug'];
}
