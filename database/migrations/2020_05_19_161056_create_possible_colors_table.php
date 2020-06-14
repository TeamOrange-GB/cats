<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePossibleColorsTable extends Migration
{
    /**
     * Миграция создания таблицы possible_colors.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('possible_colors', function (Blueprint $table) {
            $table
                ->timestamp('created_at')
                ->useCurrent();
            $table
                ->timestamp('updated_at')
                ->useCurrent();
            //поля для индексов
            $table
                ->foreignId('species_id')
                ->comment('Id вида');
            $table
                ->foreignId('colors_id')
                ->comment('Id окраса');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('possible_colors');
    }
}
