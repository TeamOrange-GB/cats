<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VideosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $videos = [
            [
                "path" => "https://www.youtube.com/watch?v=MeK1c2kgZDM",
                "pet_id" => 3,
            ],
            [
                "path" => "https://www.youtube.com/watch?v=Dogc4aThr88",
                "pet_id" => 1,
            ],
            [
                "path" => "https://www.youtube.com/watch?v=lbV4zrvp-qk",
                "pet_id" => 2,
            ],
            [
                "path" => "https://www.youtube.com/watch?v=MgHuPutQCzk",
                "pet_id" => 4,
            ],
            
        ];
        DB::table('videos')->insert($videos);
    }
}
