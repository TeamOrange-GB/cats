<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeys extends Migration
{
    /**
     * Добавление внешних ключей в таблицы БД
     *
     * @return void
     */
    public function up()
    {
        //пользователи ссылаются на города
        Schema::table('users', function (Blueprint $table) {
            $table->foreign('city_id')->references('id')->on('cities');
        });
        //города ссылаются на регионы
        Schema::table('cities', function (Blueprint $table) {
            $table->foreign('region_id')->references('id')->on('regions');
        });
        //фото ссылаются на животного
        Schema::table('photos', function (Blueprint $table) {
            $table->foreign('pet_id')->references('id')->on('pets');
        });
        //видео ссылаются на животного
        Schema::table('videos', function (Blueprint $table) {
            $table->foreign('pet_id')->references('id')->on('pets');
        });
        //возможные окрасы вида ссылаются на виды
        Schema::table('possible_colors', function (Blueprint $table) {
            $table->foreign('species_id')->references('id')->on('species');
        });
        //возможные окрасы вида ссылаются на окрасы
        Schema::table('possible_colors', function (Blueprint $table) {
            $table->foreign('colors_id')->references('id')->on('colors');
        });
        //лайки на фото ссылаются на фотографию
        Schema::table('photo_likes_users', function (Blueprint $table) {
            $table->foreign('photo_id')->references('id')->on('photos');
        });
        //лайки на фото ссылаются на пользователя
        Schema::table('photo_likes_users', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
        });
        //лайки на видео ссылаются на видео
        Schema::table('video_likes_users', function (Blueprint $table) {
            $table->foreign('video_id')->references('id')->on('videos');
        });
        //лайки на видео ссылаются на пользователя
        Schema::table('video_likes_users', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
        });


        //лайки на животного ссылаются на животное
        Schema::table('pet_likes_users', function (Blueprint $table) {
            $table->foreign('pet_id')->references('id')->on('pets');
        });
        //лайки на животного ссылаются на пользователя
        Schema::table('pet_likes_users', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
        });
        //животное ссылается на виды
        Schema::table('pets', function (Blueprint $table) {
            $table->foreign('species_id')->references('id')->on('species');
        });
        //животное ссылается на породы
        Schema::table('pets', function (Blueprint $table) {
            $table->foreign('breed_id')->references('id')->on('breeds');
        });
        //животное ссылается на окрасы
        Schema::table('pets', function (Blueprint $table) {
            $table->foreign('color_id')->references('id')->on('colors');
        });
        //статья ссылается на пользователя
        Schema::table('posts', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
        });


        //связь статей и категорий ссылается на статью
        Schema::table('posts_taxonomy', function (Blueprint $table) {
            $table->foreign('post_id')->references('id')->on('posts');
        });
        //связь статей и категорий ссылается на категорию
        Schema::table('posts_taxonomy', function (Blueprint $table) {
            $table->foreign('taxonomy_id')->references('id')->on('taxonomy');
        });


    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts_taxonomy', function (Blueprint $table) {
            $table->dropForeign(['taxonomy_id']);
        });
        Schema::table('posts_taxonomy', function (Blueprint $table) {
            $table->dropForeign(['post_id']);
        });
        Schema::table('posts', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
        });
        Schema::table('pets', function (Blueprint $table) {
            $table->dropForeign(['color_id']);
        });
        Schema::table('pets', function (Blueprint $table) {
            $table->dropForeign(['breed_id']);
        });
        Schema::table('pets', function (Blueprint $table) {
            $table->dropForeign(['species_id']);
        });
        Schema::table('pet_likes_users', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
        });
        Schema::table('pet_likes_users', function (Blueprint $table) {
            $table->dropForeign(['pet_id']);
        });
        Schema::table('video_likes_users', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
        });
        Schema::table('video_likes_users', function (Blueprint $table) {
            $table->dropForeign(['video_id']);
        });
        Schema::table('photo_likes_users', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
        });
        Schema::table('photo_likes_users', function (Blueprint $table) {
            $table->dropForeign(['photo_id']);
        });
        Schema::table('possible_colors', function (Blueprint $table) {
            $table->dropForeign(['colors_id']);
        });
        Schema::table('possible_colors', function (Blueprint $table) {
            $table->dropForeign(['species_id']);
        });
        Schema::table('videos', function (Blueprint $table) {
            $table->dropForeign(['pet_id']);
        });
        Schema::table('photos', function (Blueprint $table) {
            $table->dropForeign(['pet_id']);
        });
        Schema::table('cities', function (Blueprint $table) {
            $table->dropForeign(['region_id']);
        });
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['city_id']);
        });
    }
}
