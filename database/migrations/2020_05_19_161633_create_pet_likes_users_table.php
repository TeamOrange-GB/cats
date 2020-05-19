<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetLikesUsersTable extends Migration
{
    /**
     * Миграция создания таблицы pet_likes_users.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pet_likes_users', function (Blueprint $table) {
            $table
                ->timestamp('created_at')
                ->useCurrent();
            $table
                ->timestamp('updated_at')
                ->useCurrent();
            $table
                ->unsignedBigInteger('pet_id')
                ->comment('Id животного');
            $table
                ->unsignedBigInteger('user_id')
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
        Schema::dropIfExists('pet_likes_users');
    }
}
