<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Pet
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @property string $birthday_at Дата рождения
 * @property int $gender Пол животного true - М, false - Ж
 * @property int $mating Возможна ли вязка
 * @property string $name_real Кличка в жизни
 * @property string|null $name_doc Кличка по документам
 * @property string|null $titles Титулы
 * @property string|null $description Описание
 * @property string|null $pedigree Ссылка на фото родословной
 * @property string|null $certificate Ссылка на фото сертификата
 * @property string|null $veterinary_certificate Ссылка на фото ветеринарного сертификата
 * @property string|null $metrics Ссылка на фото метрики
 * @property int $likes_count Количество лайков
 * @property string $class Класс животного, pet обычное животное
 * @property string|null $awards_site Награды на сайте
 * @property string|null $awards Другие награды
 * @property string $status Статус животного
 * @property int $species_id Id вида
 * @property int $breed_id Id породы
 * @property int $color_id Id окраса
 * @property int $user_id Id хозяина
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pet newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pet newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pet query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pet whereAwards($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pet whereAwardsSite($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pet whereBirthdayAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pet whereBreedId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pet whereCertificate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pet whereClass($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pet whereColorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pet whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pet whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pet whereGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pet whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pet whereLikesCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pet whereMating($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pet whereMetrics($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pet whereNameDoc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pet whereNameReal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pet wherePedigree($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pet whereSpeciesId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pet whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pet whereTitles($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pet whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pet whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pet whereVeterinaryCertificate($value)
 * @mixin \Eloquent
 */
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
