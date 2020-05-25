<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhotosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $photos = [
            [
                "path" => "storage/imagesabiss.jpg",
                "pet_id" => 2,
            ],
            [
                "path" => "storage/imagesbeng.jpg",
                "pet_id" => 3,
            ],
            [
                "path" => "storage/imagesvislouh.jpg",
                "pet_id" => 1,
            ],
            [
                "path" => "storage/imagesbrit.jpg",
                "pet_id" => 4,
            ],
            [
                "path" => "storage/imagessiam.jpg",
                "pet_id" => 5,
            ],
            [
                "path" => "storage/imagessiam.jpg",
                "pet_id" => 6,
            ],
            [
                "path" => "storage/imagesbrit.jpg",
                "pet_id" => 7,
            ],
            [
                "path" => "storage/imagesbeng.jpg",
                "pet_id" => 8,
            ],
            [
                "path" => "storage/imagesbrit.jpg",
                "pet_id" => 9,
            ],
            [
                "path" => "storage/imagesabiss.jpg",
                "pet_id" => 10,
            ],
        ];
        DB::table('photos')->insert($photos);
    }
}
