<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostTaxonomy extends Model
{
    protected $table = 'posts_taxonomy';
    protected $fillable = ['post_id', 'taxonomy_id'];
}

