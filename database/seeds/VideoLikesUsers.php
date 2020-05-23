<?php


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Video;

class VideoLikesUsers extends Seeder
{
    /**
     * Заполняем таблицу photo_likes_users (юзеры поставившие лайк на фотку).
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();
        $videos = Video::all();
        $table = [];

        foreach ($videos as $video){
            $likes = 0;
            foreach ($users as $user){
                if(rand(0,1)){
                    $record['user_id'] = $user->id;
                    $record['video_id'] = $video->id;
                    $table[] = $record;
                    $likes++;
                }
            }
            //видео нужно увеличить количество лайков
            $video->likes_count = $likes;
            $video->save();
        }
        DB::table('video_likes_users')->insert($table);
    }
}
