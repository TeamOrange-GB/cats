<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('id');
            $table
                ->timestamp('created_at')
                ->useCurrent();
            $table
                ->timestamp('updated_at')
                ->useCurrent();
            $table
                ->string('name', 100)
                ->nullable(false)
                ->comment('Имя пользователя');
            $table
                ->string('email', 100)
                ->unique()
                ->nullable(false)
                ->comment('E-mail пользователя');
            $table
                ->string('password', 100)
                ->nullable(false)
                ->comment('Пароль пользователя');
            $table
                ->enum('role', ['user', 'admin', 'sponsor', 'owner'])
                ->nullable(false)
                ->default('user')
                ->comment('Полномочия пользователя');
            $table
                ->string('social_id_vkontakte', 50)
                ->nullable(true)
                ->default(null)
                ->unique()
                ->comment('id в контакте');
            $table
                ->string('social_id_odnoklassniki', 50)
                ->nullable(true)
                ->default(null)
                ->unique()
                ->comment('id в одноклассниках');
            $table
                ->string('social_id_google', 50)
                ->nullable(true)
                ->default(null)
                ->unique()
                ->comment('id в google');
            $table
                ->enum('type_auth', ['site', 'vk', 'google', 'odnoklassniki'])
                ->nullable(false)
                ->default('site')
                ->comment('Тип авторизации');
            $table
                ->enum('status', ['active', 'block'])
                ->nullable(false)
                ->default('active')
                ->comment('Статус пользователя');
            $table
                ->text('description')
                ->nullable(true)
                ->comment('Описание пользователя');
            $table->string('phone', 15)
                ->nullable(true)
                ->default(null)
                ->unique()
                ->comment('Телефон пользователя');
            $table
                ->string('avatar', 255)
                ->nullable(true)
                ->default(null)
                ->comment('Ссылка на аватар');

            //поля для индексов
            $table
                ->unsignedBigInteger('city_id')
                ->nullable(true)
                ->default(null);

//            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
