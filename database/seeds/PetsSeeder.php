<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Breed;
use App\Color;

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
        $users = User::all();
        $breeds = Breed::all();
        $colors = Color::all();

        $data = [];
        for ($i = 0; $i < 10; $i++) {
            $data[] = [
                'birthday_at' => $faker->dateTimeThisYear(),
                'gender' => (bool)rand(false, true),
                'mating' => (bool)rand(false, true),
                'name_real' => $faker->unique()->firstName,
                'name_doc' => $faker->unique()->firstName,
                'description' => $faker->realText(rand(200,1000)),
                'species_id' => 1,
                'breed_id' => $breeds->random()->id,
                'color_id' => $colors->random()->id,
                'user_id' => $users->random()->id
            ];
        }
        return $data;
    }
}
