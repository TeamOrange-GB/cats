<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhotoLikesUsersTable extends Migration
{
    /**
     * Миграция создания таблицы photo_likes_users.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photo_likes_users', function (Blueprint $table) {
            $table
                ->timestamp('created_at')
                ->useCurrent();
            $table
                ->timestamp('updated_at')
                ->useCurrent();
            //поля для индексов
            $table
                ->foreignId('photo_id')
                ->comment('Id фото');
            $table
                ->foreignId('user_id')
                ->comment('Id пользователя');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('photo_likes_users');
    }
}
