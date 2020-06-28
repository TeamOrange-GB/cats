<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTaxonomyTable extends Migration
{
    /**
     * Миграция создания таблицы posts_taxonomy (принадлежность категории или тега к статье).
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts_taxonomy', function (Blueprint $table) {
            $table->id('id');
            $table
                ->timestamp('created_at')
                ->useCurrent();
            $table
                ->timestamp('updated_at')
                ->useCurrent();
            //поля для индексов
            $table
                ->foreignId('post_id')
                ->comment('Id статьи');
            $table
                ->foreignId('taxonomy_id')
                ->comment('Id категории или тега');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts_taxonomy');
    }
}
