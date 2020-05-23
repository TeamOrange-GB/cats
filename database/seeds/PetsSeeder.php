<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PetsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pets')->insert($this->getData());
    }

    private function getData(): array
    {
        $faker = Faker\Factory::create('ru_RU');
        $data = [];
        for ($i = 0; $i < 10; $i++) {
            $data[] = [
                'birthday_at' => $faker->dateTimeThisYear(),
                'gender' => (bool)rand(false, true),
                'mating' => (bool)rand(false, true),
                'name_real' => $faker->name,
                'name_doc' => $faker->name,
                'description' => $faker->realText(rand(200,1000)),
                'species_id' => 1,
                'breed_id' => rand(1, 6),
                'color_id' => rand(1, 12)
            ];
        }
        return $data;
    }
}
