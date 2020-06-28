<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pet;
use App\PetLikesUser;
use Illuminate\Support\Facades\DB;
#use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;

class LikesPetController extends Controller
{
	static function responseJson( $id, $likes = null ){
		$arr = [ 'id' => $id ];
		if( is_null( $likes ) ){
			$arr['error'] = 'Pet not found';
		}else{
			$arr['likes'] = $likes;
		}
		
		return response()->json($arr);
	}
	
	public function add( $id )
    {
		
		$pet = Pet::find( $id );
		if( empty($pet) ){
			return self::responseJson( $id );
		}
		$pet_likes = $pet['likes_count'];
		
		$pet_liked = PetLikesUser::where( 'pet_id', $id )
			->where( 'user_id', Auth::id() )
			->first();
		if( empty($pet_liked) ){
			PetLikesUser::insert( [ 'pet_id' => $id, 'user_id' => Auth::id() ] );
			
			$pet_likes = PetLikesUser::where( 'pet_id', $id )
				->count();
				
			Pet::where( 'id', $id )
				->update( [ 'likes_count' => $pet_likes ] );
		}
		
		return self::responseJson( $id, $pet_likes );
    }
	
    public function remove( $id )
    {
		
		$pet = Pet::find( $id );
		if( empty($pet) ){
			return self::responseJson( $id );
		}
		$pet_likes = $pet['likes_count'];
		
		$pet_liked = PetLikesUser::where( 'pet_id', $id )
			->where( 'user_id', Auth::id() )
			->first();
		if( ! empty($pet_liked) ){
			PetLikesUser::where( [ 'pet_id' => $id, 'user_id' => Auth::id() ] )
				->delete();
			
			$pet_likes = PetLikesUser::where( 'pet_id', $id )
				->count();
				
			Pet::where( 'id', $id )
				->update( [ 'likes_count' => $pet_likes ] );
		}
		
		return self::responseJson( $id, $pet_likes );
    }
}
