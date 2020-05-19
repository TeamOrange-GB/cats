<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideoLikesUsersTable extends Migration
{
    /**
     * Миграция создания таблицы video_likes_users.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('video_likes_users', function (Blueprint $table) {
            $table
                ->timestamp('created_at')
                ->useCurrent();
            $table
                ->timestamp('updated_at')
                ->useCurrent();
            $table
                ->unsignedBigInteger('video_id')
                ->comment('Id видео');
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
        Schema::dropIfExists('video_likes_users');
    }
}
