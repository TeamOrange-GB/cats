<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetsTable extends Migration
{
    /**
     * Миграция создания таблицы pets.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pets', function (Blueprint $table) {
            $table->id('id');
            $table
                ->timestamp('created_at')
                ->useCurrent();
            $table
                ->timestamp('updated_at')
                ->useCurrent();
            $table
                ->date('birthday_at')
                ->comment('Дата рождения');
            $table
                ->boolean('gender')
                ->comment('Пол животного true - М, false - Ж');
            $table
                ->boolean('mating')
                ->default(false)
                ->comment('Возможна ли вязка');
            $table
                ->string('name_real', 100)
                ->comment('Кличка в жизни');
            $table
                ->string('name_doc', 100)
                ->nullable()
                ->comment('Кличка по документам');
            $table
                ->text('titles')
                ->nullable()
                ->comment('Титулы');
            $table
                ->text('description')
                ->nullable()
                ->comment('Описание');
            $table
                ->string('pedigree',255)
                ->nullable()
                ->comment('Ссылка на фото родословной');
            $table
                ->string('certificate',255)
                ->nullable()
                ->comment('Ссылка на фото сертификата');
            $table
                ->string('veterinary_certificate',255)
                ->nullable()
                ->comment('Ссылка на фото ветеринарного сертификата');
            $table
                ->string('metrics',255)
                ->nullable()
                ->comment('Ссылка на фото метрики');
            $table
                ->unsignedInteger('likes_count')
                ->default(0)
                ->comment('Количество лайков');
            $table->enum('class', ['show', 'breed', 'pet'])
                ->default('pet')
                ->comment('Класс животного, pet обычное животное');
            $table
                ->text('awards_site')
                ->nullable()
                ->comment('Награды на сайте');
            $table
                ->text('awards')
                ->nullable()
                ->comment('Другие награды');
            $table
                ->enum('status', ['active', 'block'])
                ->default('active')
                ->comment('Статус животного');

            //поля для индексов
            $table
                ->foreignId('species_id')
                ->comment('Id вида');
            $table
                ->foreignId('breed_id')
                ->comment('Id породы');
            $table
                ->foreignId('color_id')
                ->comment('Id окраса');
            $table
                ->foreignId('user_id')
                ->comment('Id хозяина');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pets');
    }
}
