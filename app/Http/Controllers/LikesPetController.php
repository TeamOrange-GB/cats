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
	
	public function add( $id )
    {
		
		$pet = Pet::find( $id );
		if( empty($pet) ){
			return response( 'Pet not found' );
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
		
		return response($pet_likes);
    }
	
    public function remove( $id )
    {
		
		$pet = Pet::find( $id );
		if( empty($pet) ){
			return response( 'Pet not found' );
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
		
		return response($pet_likes);
    }
}
