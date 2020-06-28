<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Миграция создания таблицы users.
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
                ->comment('Имя пользователя');
            $table
                ->string('email', 100)
                ->unique()
                ->nullable()
                ->comment('E-mail пользователя');
            $table
                ->string('password', 100)
                ->comment('Пароль пользователя');
            $table
                ->enum('role', ['user', 'admin', 'sponsor', 'owner'])
                ->default('user')
                ->comment('Полномочия пользователя');
            $table
                ->string('link_vkontakte', 50)
                ->nullable()
                ->comment('ссылка на В контакте');
            $table
                ->string('link_odnoklassniki', 50)
                ->nullable()
                ->comment('ссылка на Одноклассники');
            $table
                ->string('link_google', 50)
                ->nullable()
                ->comment('Ссылка на google');
            $table
                ->string('social_id', 50)
                ->nullable()
                ->comment('Id в социальной сети, через которую была регистрация');
            $table
                ->enum('type_auth', ['site', 'vkontakte', 'google', 'odnoklassniki'])
                ->default('site')
                ->comment('Тип авторизации');
            $table
                ->enum('status', ['active', 'block'])
                ->default('active')
                ->comment('Статус пользователя');
            $table
                ->text('description')
                ->nullable()
                ->comment('Описание пользователя');
            $table->string('phone', 15)
                ->nullable()
                ->unique()
                ->comment('Телефон пользователя');
            $table
                ->string('avatar', 255)
                ->nullable()
                ->comment('Ссылка на аватар');

            //поля для индексов
            $table
                ->foreignId('city_id')
                ->nullable()
                ->comment('Id населённого пункта');

            $table->rememberToken();
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
