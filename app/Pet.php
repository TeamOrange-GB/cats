<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Breed;
#use App\Species;
use App\Color;
use App\Photo;
use App\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

    /**
     * Метод возвращает упрощенный список животных.
     *
     * @param int $user выборка животных принадлежащих одному юзеру.
     * @return array
     */
    static public function getPets( $user = null ){
        $pets = self::query()
			->select('pets.id',  'pets.gender', 'pets.name_real', 'pets.likes_count', 'pets.awards_site', 'pets.awards', 'colors.color', 'breeds.breed', 'species.species')
            ->join('colors', 'pets.color_id', '=', 'colors.id')
            ->join('breeds', 'pets.breed_id', '=', 'breeds.id')
            ->join('species', 'pets.species_id', '=', 'species.id')
        ;
		if( $user ){
			$pets->where( 'pets.user_id', $user );
		}	
		
        return $pets->get();
	}
    /**
     * Метод возвращает данные животного.
     *
     * @param bool $addUserData нужно ли добавлять данные о юзерe.
     * @return array
     */
    public function getPetData(bool $addUserData)
    {
		$data = [
            'id' => $this->id,
            'birthday_at' => $this->birthday_at,
            'gender' => $this->gender,
            'mating' => $this->mating,
            'name_real' => $this->name_real,
            'name_doc' => $this->name_doc,
            'titles' => $this->titles,
            'description' => $this->description,
            'pedigree' => $this->pedigree,
            'certificate' => $this->certificate,
            'veterinary_certificate' => $this->veterinary_certificate,
            'metrics' => $this->metrics,
            'likes_count' => $this->likes_count,
            'class' => $this->class,
            'awards_site' => $this->awards_site,
            'awards' => $this->awards,
            'status' => $this->status,
            'photos' => $this->photos,
            //вернём не только id вида, но и название
            'species_id' => $this->species_id,
            'species' => $this->species->species,
            //вернём не только id породы, но и название
            'breed_id' => $this->breed_id,
            'breed' => $this->breed->breed,
            //вернём не только id цвета, но и название
            'color_id' => $this->color_id,
            'color' => $this->color->color,
        ];

        if ($addUserData) {
            $data['user_id'] = $this->user_id;
            $data['user'] = $this->user->name;

        }
        return $data;
    }
    /**
     * Метод для получения владельца через Relations\BelongsTo
     *
     * @return BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    /**
     * Метод для получения всех фотографий через Relations\hasMany
     *
     * @return hasMany
     */
    public function photos(){
        return $this->hasMany('App\Photo')->select('path', 'likes_count');
    }
    /**
     * Метод для получения вида через Relations\BelongsTo
     *
     * @return BelongsTo
     */
    public function species()
    {
        return $this->belongsTo('App\Species');
    }
    /**
     * Метод для получения породы через Relations\BelongsTo
     *
     * @return BelongsTo
     */
    public function breed()
    {
        return $this->belongsTo('App\Breed');
    }
    /**
     * Метод для получения окраса через Relations\BelongsTo
     *
     * @return BelongsTo
     */
    public function color()
    {
        return $this->belongsTo('App\Color');
    }
}
