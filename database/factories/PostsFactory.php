<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;
use Illuminate\Support\Str;


$factory->define(Post::class, function (Faker $faker) {
    $item = [
        'title' => $faker->unique()->realText(40),
        'content' => $faker->realText(),
        'status' => 'publish',
        'type' => 'post',
        'user_id' => 1//обязательно нужен юзер с id '1'
    ];
    $item['slug'] = Str::slug($item['title'], '-');
    return $item;
});
