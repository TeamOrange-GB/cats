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
        //перед сидингом городов нужно сделать сидинг регионов
        $this->call(CitiesSeeder::class);
        //перед сидингом юзеров нужно сделать сидинг городов
        $this->call(UsersSeeder::class);
        //перед сидингом животных нужно сделать сидинг юзеров, видов, пород и цветов
        $this->call(PetsSeeder::class);
        //перед сидингом фото нужно сделать сидинг животных
        $this->call(PhotosSeeder::class);
        //перед сидингом видео нужно сделать сидинг животных
        $this->call(VideosSeeder::class);
        $this->call(TaxonomySeeder::class);
        //перед сидингом постов нужно сделать сидинг юзеров
        $this->call(PostsSeeder::class);
        //перед сидингом категорий постов нужно сделать сидинг категорий и постов
        $this->call(PostsTaxonomySeeder::class);
        //перед сидингом постов нужно сделать сидинг юзеров, животных
        $this->call(PetLikesUsers::class);
        $this->call(PhotoLikesUsers::class);
        //$this->call(VideoLikesUsers::class);
    }
}
