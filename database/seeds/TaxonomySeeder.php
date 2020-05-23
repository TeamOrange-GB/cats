<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Taxonomy;


class TaxonomySeeder extends Seeder
{
    /**
     * Заполняем таблицу Taxonomy (категории и теги статей)
     *
     * @return void
     */
    public function run()
    {
        $taxonomy = [
            ['name' => 'Кошачье здоровье'],
            ['name' => 'Корм для кошек'],
            ['name' => 'Товары для кошек'],
            ['name' => 'Услуги для кошек'],
            ['name' => 'Музыка для кошек'],
            ['name' => 'Кошачья психология'],
        ];

        foreach ($taxonomy as &$item) {
            $item['slug'] = Str::slug($item['name'], '-');
        }

        DB::table('taxonomy')->insert($taxonomy);
    }
}
