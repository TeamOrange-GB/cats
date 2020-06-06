<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\PostTaxonomy
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @property int $post_id Id статьи
 * @property int $taxonomy_id Id категории или тега
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PostTaxonomy newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PostTaxonomy newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PostTaxonomy query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PostTaxonomy whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PostTaxonomy whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PostTaxonomy wherePostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PostTaxonomy whereTaxonomyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PostTaxonomy whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class PostTaxonomy extends Model
{
    protected $table = 'posts_taxonomy';
    protected $fillable = ['post_id', 'taxonomy_id'];
}

