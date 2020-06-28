<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Миграция создания таблицы pets.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id('id');
            $table
                ->timestamp('created_at')
                ->useCurrent();
            $table
                ->timestamp('updated_at')
                ->useCurrent();
            $table->string('title', 200)//255 не позволяет сервер
                ->unique()
                ->comment('Название статьи');
            $table
                ->string('slug', 200)//255 не позволяет сервер
                ->unique()
                ->comment('ЧПУ');
            $table
                ->text('content')
                ->comment('Текст статьи');
            $table
                ->enum('status', ['publish', 'draft', 'trash'])
                ->default('draft')
                ->comment('Статус статьи');
            $table
                ->enum('type', ['post', 'page'])
                ->default('post')
                ->comment('Тип статьи');

            //поля для индексов
            $table
                ->foreignId('user_id')
                ->comment('Id автора');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
