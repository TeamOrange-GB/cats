<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ColorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $colors = [
            [
                "color" => "черный"
            ],
            [
                "color" => "кремовый"
            ],
            [
                "color" => "белый"
            ],
            [
                "color" => "красный"
            ],
            [
                "color" => "голубой"
            ],
            [
                "color" => "сил-поинт"
            ],
            [
                "color" => "карамель-поинт"
            ],
            [
                "color" => "блю-поинт"
            ],
            [
                "color" => "шоколад-поинт"
            ],
            [
                "color" => "коричневый табби"
            ],
            [
                "color" => "серебряный табби"
            ],
            [
                "color" => "угольный"
            ],
        ];
        DB::table('colors')->insert($colors);
    }
}
