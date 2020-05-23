<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\Taxonomy;

class PostsTaxonomySeeder extends Seeder
{
    /**
     * Заполняем таблицу posts_taxonomy (принадлежность категории или тега к статье).
     *
     * @return void
     */
    public function run()
    {
        $table = [];
        $posts = Post::all('id');
        $taxonomy = Taxonomy::all('id');

        foreach ($posts as $post){
            $record['post_id'] = $post->id;
            $record['taxonomy_id'] = $taxonomy->random()->id;
            $table[] = $record;
        }
        DB::table('posts_taxonomy')->insert($table);
    }
}
