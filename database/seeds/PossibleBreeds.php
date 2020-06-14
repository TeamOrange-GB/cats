<?php

use Illuminate\Database\Seeder;
use App\Breed;

class PossibleBreeds extends Seeder
{
    /**
     * Заполняем таблицу possible_breeds (возможные породы вида)
     *
     * @return void
     */
    public function run()
    {
        $breeds = Breed::all();
        $table = [];
        foreach ($breeds as $breed) {
            $record['species_id'] = 1;//сейчас только коты
            $record['breeds_id'] = $breed->id;
            $table[] = $record;
        }
        DB::table('possible_breeds')->insert($table);
    }
}
