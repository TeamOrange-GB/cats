<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostsSeeder extends Seeder
{
    /**
     * Заполняем таблицу Posts
     *
     * @return void
     */
    public function run()
    {
        factory(Post::class, 10)->create();
    }
}
