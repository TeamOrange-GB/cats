<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Taxonomy
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @property string $type Категория или тэг
 * @property string $name Название категории
 * @property string $slug ЧПУ
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Taxonomy newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Taxonomy newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Taxonomy query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Taxonomy whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Taxonomy whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Taxonomy whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Taxonomy whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Taxonomy whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Taxonomy whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Taxonomy extends Model
{
    protected $table = 'taxonomy';
    protected $fillable = ['type', 'name', 'slug'];
}
