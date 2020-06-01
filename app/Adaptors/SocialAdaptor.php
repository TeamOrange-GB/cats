<?php

namespace App\Adaptors;

use App\User;
use Laravel\Socialite\Two\User as UserOAuth;


class SocialAdaptor
{
    public function getUserBySocId(UserOAuth $oauth_user, string $socName)
    {
        //тут выбираем соцсеть по которой регистрируемся
        switch($socName){
            case 'vkontakte' : $user_data = $this->getUserDataVkontakte($oauth_user, $socName); break;
            default : abort(404);
        }

        //проверка существования юзера
        $exist_user = User::query()
            ->where('social_id', $user_data['social_id'])
            ->where('type_auth', $user_data['type_auth'])
            ->first();

        //если юзер не существует
        if (is_null($exist_user)) {
            //проверка уникальности email
            $user_with_email = User::query()->where('email', $user_data['email'])->first();
            //если такой емейл уже есть, то уберём его из $user_data.
            if (isset($user_with_email))
                $user_data['email'] = null;

            $new_user = new User();
            $new_user->fill($user_data);

            $new_user->save();
            return $new_user;
        }
        return $exist_user;
    }

    private function getUserDataVkontakte(UserOAuth $user, $socName)
    {
        return[
                'name' => $user->getName() ? $user->getName() : ($user->getNickname() ? $user->getNickname() : ''),
                'email' => $user->accessTokenResponseBody['email'],
                'password' => '',
                'social_id' => $user->getId(),
                'type_auth' => $socName,
                'avatar' => $user->getAvatar() ? $user->getAvatar() : '',
        ];
    }

}
