<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideosTable extends Migration
{
    /**
     * Миграция создания таблицы videos.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->id('id');
            $table
                ->timestamp('created_at')
                ->useCurrent();
            $table
                ->timestamp('updated_at')
                ->useCurrent();
            $table
                ->string('path', 255)
                ->comment('Путь к видео');
            $table
                ->unsignedInteger('likes_count')
                ->default(0)
                ->comment('Количество лайков');
            //поля для индексов
            $table
                ->foreignId('pet_id')
                ->comment('Id животного');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('videos');
    }
}
