<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
*/
#Route::middleware('auth:sanctum')->group(function () {
	
	Route::get('/user', function (Request $request) {
		return response()->json([
			'message' => 'private data received',
			'user' => $request->user()
		]);
	});
	
#	Route::method('object/method/param/id')
#	Route::get('/likes/get/pet/{id}',       'PetsController@like_get_pet')->where('id', '[1-9][0-9]*');
	Route::post('/likes/add/pet/{id}',      'LikesPetController@add')->where('id',    '[1-9][0-9]*');
	Route::post('/likes/remove/pet/{id}',   'LikesPetController@remove')->where('id', '[1-9][0-9]*');
	
	Route::post('/likes/add/photo/{id}',    'LikesPhotoController@add')->where('id',    '[1-9][0-9]*');
	Route::post('/likes/remove/photo/{id}', 'LikesPhotoController@remove')->where('id', '[1-9][0-9]*');
	
	Route::post('/pets/add/',               'PetsController@add');
#	Route::get('/pets/get/{id}',            'PetsController@get')->where('id', '[1-9][0-9]*');
	Route::post('/pets/update/{id}',        'PetsController@update')->where('id', '[1-9][0-9]*');
	Route::post('/pets/remove/{id}',        'PetsController@remove')->where('id', '[1-9][0-9]*');
	
	Route::post('/user/add/',               'UsersController@add');
#	Route::get('/user/get/{id}',            'UsersController@get')->where('id', '[1-9][0-9]*');
	Route::post('/user/update/{id}',        'UsersController@update')->where('id', '[1-9][0-9]*');
	Route::post('/user/remove/{id}',        'UsersController@remove')->where('id', '[1-9][0-9]*');

#});

	Route::get('/pets/get/{id}',            'PetsController@get')->where('id', '[1-9][0-9]*');

	Route::get('/user/get/{id}',            'UsersController@get')->where('id', '[1-9][0-9]*');
	
	Route::get('/catalog',                  'PetsController@index');
	//получение хозяина животного и всех его животных
	Route::get('/owner/{id}', 'PetsController@getOwner');

/*
|--------------------------------------------------------------------------
| Ловушка для всех остальных запросов к API
|--------------------------------------------------------------------------
*/
Route::get('/{any}', function(){
	return 'access denied';
})->where('any', '.*');