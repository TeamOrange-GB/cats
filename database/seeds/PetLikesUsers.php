<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Pet;

class PetLikesUsers extends Seeder
{
    /**
     * Заполняем таблицу pet_likes_users (юзеры поставившие лайк на фотку).
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();
        $pets = Pet::all();
        $table = [];

        foreach ($pets as $pet){
            $likes = 0;
            foreach ($users as $user){
                if(rand(0,1)){
                    $record['user_id'] = $user->id;
                    $record['pet_id'] = $pet->id;
                    $table[] = $record;
                    $likes++;
                }
            }
            //животному нужно увеличить количество лайков
            $pet->likes_count = $likes;
            $pet->save();
        }
        DB::table('pet_likes_users')->insert($table);
    }
}
