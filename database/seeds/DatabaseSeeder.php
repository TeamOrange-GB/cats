<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(BreedsSeeder::class);
        $this->call(ColorsSeeder::class);
        $this->call(SpeciesSeeder::class);
        $this->call(RegionsSeeder::class);
        $this->call(CitiesSeeder::class);
        $this->call(PetsSeeder::class);
        $this->call(UsersSeeder::class);
    }
}
