<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaxonomyTable extends Migration
{
    /**
     * Миграция создания таблицы taxonomy (категории и теги).
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taxonomy', function (Blueprint $table) {
            $table->id('id');
            $table
                ->timestamp('created_at')
                ->useCurrent();
            $table
                ->timestamp('updated_at')
                ->useCurrent();
            $table
                ->enum('type', ['category', 'tag'])
                ->default('category')
                ->comment('Категория или тэг');
            $table->string('name', 200)//255 не позволяет сервер
                ->unique()
                ->comment('Название категории');
            $table
                ->string('slug', 200)//255 не позволяет сервер
                ->unique()
                ->comment('ЧПУ');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('taxonomy');
    }
}
