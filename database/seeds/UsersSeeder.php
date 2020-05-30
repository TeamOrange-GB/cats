<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'admin',
                'email' => Str::random(7).'@mail.ru', 
                'password' => '111',
                'role' => 'admin',
                'social_id_vkontakte' => null,
                'social_id_odnoklassniki' => null,
                'social_id_google' => null,
                'type_auth' => 'site',
                'status' => 'active',
                'description' => null,
                'phone' => '8-800-555-35-35',
                'avatar' => null,
                'city_id' => rand(30, 65)
            ],
            [
                'name' => 'user',
                'email' => Str::random(7).'@mail.ru', 
                'password' => '222',
                'role' => 'user',
                'social_id_vkontakte' => null,
                'social_id_odnoklassniki' => null,
                'social_id_google' => null,
                'type_auth' => 'site',
                'status' => 'active',
                'description' => null,
                'phone' => '8-800-555-35-36',
                'avatar' => null,
                'city_id' => rand(30, 65)
            ],
            [
                'name' => 'sponsor',
                'email' => Str::random(7).'@mail.ru', 
                'password' => '333',
                'role' => 'sponsor',
                'social_id_vkontakte' => null,
                'social_id_odnoklassniki' => null,
                'social_id_google' => null,
                'type_auth' => 'site',
                'status' => 'active',
                'description' => null,
                'phone' => '8-800-555-35-37',
                'avatar' => null,
                'city_id' => rand(30, 65)
            ],
            [
                'name' => 'owner',
                'email' => Str::random(7).'@mail.ru', 
                'password' => '444',
                'role' => 'owner',
                'social_id_vkontakte' => null,
                'social_id_odnoklassniki' => null,
                'social_id_google' => null,
                'type_auth' => 'site',
                'status' => 'active',
                'description' => null,
                'phone' => '8-800-555-35-38',
                'avatar' => null,
                'city_id' => rand(30, 65)
            ]
        ];
        DB::table('users')->insert($users);
    }
}
