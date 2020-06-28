<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpeciesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $species = [
            [
                "species" => "кошки"
            ],
            [
                "species" => "собаки"
            ],
        ];
        DB::table('species')->insert($species);
    }
}
