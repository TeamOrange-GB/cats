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
        $password = Hash::make('password');

        $users = [
            [
                'name' => 'admin',
                'email' => Str::random(7).'@mail.ru',
                'password' => $password,
                'role' => 'admin',
                'link_vkontakte' => null,
                'link_odnoklassniki' => null,
                'link_google' => null,
                'type_auth' => 'site',
                'status' => 'active',
                'description' => null,
                'phone' => '8-800-555-35-35',
                'avatar' => null,
                'city_id' => rand(30, 65),
				'organization_name' => null,
				'organization_certificate' => null,
				'organization_created' => null
            ],
            [
                'name' => 'user',
                'email' => Str::random(7).'@mail.ru',
                'password' => $password,
                'role' => 'user',
                'link_vkontakte' => null,
                'link_odnoklassniki' => null,
                'link_google' => null,
                'type_auth' => 'site',
                'status' => 'active',
                'description' => null,
                'phone' => '8-800-555-35-36',
                'avatar' => null,
                'city_id' => rand(30, 65),
				'organization_name' => null,
				'organization_certificate' => null,
				'organization_created' => null
            ],
            [
                'name' => 'sponsor',
                'email' => Str::random(7).'@mail.ru',
                'password' => $password,
                'role' => 'sponsor',
                'link_vkontakte' => null,
                'link_odnoklassniki' => null,
                'link_google' => null,
                'type_auth' => 'site',
                'status' => 'active',
                'description' => null,
                'phone' => '8-800-555-35-37',
                'avatar' => null,
                'city_id' => rand(30, 65),
				'organization_name' => null,
				'organization_certificate' => null,
				'organization_created' => null
            ],
            [
                'name' => 'owner',
                'email' => Str::random(7).'@mail.ru',
                'password' => $password,
                'role' => 'owner',
                'link_vkontakte' => null,
                'link_odnoklassniki' => null,
                'link_google' => null,
                'type_auth' => 'site',
                'status' => 'active',
                'description' => null,
                'phone' => '8-800-555-35-38',
                'avatar' => null,
                'city_id' => rand(30, 65),
				'organization_name' => 'ООО "Ромашка"',
				'organization_certificate' => 'PFG0000364',
				'organization_created' => '2017-03-15'
            ]
        ];
        DB::table('users')->insert($users);
    }
}
