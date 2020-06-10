<?php

namespace App;

use App\City;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Region;
use App\Pet;

/**
 * App\User
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @property string $name Имя пользователя
 * @property string|null $email E-mail пользователя
 * @property string $password Пароль пользователя
 * @property string $role Полномочия пользователя
 * @property string|null $link_vkontakte ссылка на В контакте
 * @property string|null $link_odnoklassniki ссылка на Одноклассники
 * @property string|null $link_google Ссылка на google
 * @property string|null $social_id Id в социальной сети, через которую была регистрация
 * @property string $type_auth Тип авторизации
 * @property string $status Статус пользователя
 * @property string|null $description Описание пользователя
 * @property string|null $phone Телефон пользователя
 * @property string|null $avatar Ссылка на аватар
 * @property int|null $city_id Id населённого пункта
 * @property string|null $remember_token
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereLinkGoogle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereLinkOdnoklassniki($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereLinkVkontakte($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereSocialId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereTypeAuth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Метод возвращает данные пользователя.
     *
     * @param bool $addPetsData нужно ли добавлять данные о животных юзера.
     * @return array
     * @summary
     */
    public function getUserData($addPetsData)
    {
        $city = City::findOrFail($this['city_id']);

        $data = [
            //'email' => $this->email,  не думаю, что стоит светить емейл юзера, нужно обсудить
            'id' => $this->id,
            'name' => $this->name,
            'role' => $this->role,
            'link_vkontakte' => $this->link_vkontakte,
            'link_odnoklassniki' => $this->link_odnoklassniki,
            'link_google' => $this->link_google,
            'status' => $this->status,
            'description' => $this->description,
            'phone' => $this->phone,
            'avatar' => $this->avatar,
            //вернём не только id города, но и название
            'city_id' => $this->city_id,
            'city' => $city->name,
            //вернём не только id региона, но и название
            'region_id' => $city->region_id,
            'region' => $city->region->region,
//            'region' => Region::findOrFail($city['region_id'])->region,
        ];

        if($addPetsData){
            $data['pets'] = $this->getUserPets();
        }
        return $data;
    }
    /**
     * Метод возвращает список животных пользователя.
     *
     * @return array
     */
    public function getUserPets(){
        $pets = Pet::where('user_id', $this->id)->get();
        $petsData = [];
        foreach ($pets as $pet){
            //false - инфу о юзере не запрашиваем, добавим тут
            $newPet = $pet->getPetData(false);
            $newPet['user_name'] = $this['name'];
            $petsData[] = $newPet;
        }
        return $petsData;
    }
}
