<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;
use App\PhotoLikesUser;
use Illuminate\Support\Facades\DB;
#use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;

class LikesPhotoController extends Controller
{
	
	public function add( $id )
    {
		
		$obj = Photo::find( $id );
		if( empty($obj) ){
			return response( 'Photo not found' );
		}
		$obj_likes = $obj['likes_count'];
		
		$obj_liked = PhotoLikesUser::where( 'photo_id', $id )
			->where( 'user_id', Auth::id() )
			->first();
		if( empty($obj_liked) ){
			PhotoLikesUser::insert( [ 'photo_id' => $id, 'user_id' => Auth::id() ] );
			
			$obj_likes = PhotoLikesUser::where( 'photo_id', $id )
				->count();
				
			Photo::where( 'id', $id )
				->update( [ 'likes_count' => $obj_likes ] );
		}
		
		return response($obj_likes);
    }
	
    public function remove( $id )
    {
		
		$obj = Photo::find( $id );
		if( empty($obj) ){
			return response( 'Photo not found' );
		}
		$obj_likes = $obj['likes_count'];
		
		$obj_liked = PhotoLikesUser::where( 'photo_id', $id )
			->where( 'user_id', Auth::id() )
			->first();
		#	var_dump( $obj_liked );
		if( ! empty($obj_liked) ){
			PhotoLikesUser::where( [ 'photo_id' => $id, 'user_id' => Auth::id() ] )
				->delete();
			
			$obj_likes = PhotoLikesUser::where( 'photo_id', $id )
				->count();
				
			Photo::where( 'id', $id )
				->update( [ 'likes_count' => $obj_likes ] );
		}
		
		return response($obj_likes);
    }
}
