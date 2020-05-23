<?php


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Photo;

class PhotoLikesUsers extends Seeder
{
    /**
     * Заполняем таблицу photo_likes_users (юзеры поставившие лайк на фотку).
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();
        $photos = Photo::all();
        $table = [];

        foreach ($photos as $photo){
            $likes = 0;
            foreach ($users as $user){
                if(rand(0,1)){
                    $record['user_id'] = $user->id;
                    $record['photo_id'] = $photo->id;
                    $table[] = $record;
                    $likes++;
                }
            }
            //фото нужно увеличить количество лайков
            $photo->likes_count = $likes;
            $photo->save();
        }
        DB::table('photo_likes_users')->insert($table);
    }
}
