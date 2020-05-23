<?php

use Illuminate\Database\Seeder;
use App\Color;

class PossibleColors extends Seeder
{
    /**
     * Заполняем таблицу possible_colors (возможные окрасы вида)
     *
     * @return void
     */
    public function run()
    {
        $colors = Color::all();
        $table = [];
        foreach ($colors as $color) {
            $record['species_id'] = 1;//сейчас только коты
            $record['colors_id'] = $color->id;
            $table[] = $record;
        }
        DB::table('possible_colors')->insert($table);
    }
}
