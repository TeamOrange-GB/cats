<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
*/
Route::middleware('auth:sanctum')->group(function () {
	
	Route::get('/user', function (Request $request) {
		return response()->json([
			'message' => 'private data received',
			'user' => $request->user()
		]);
	});
	//добавление и удаление лайка для животного
	Route::post('/likes/add/pet/{id}',      'LikesPetController@add')->where('id',    '[1-9][0-9]*');
	Route::post('/likes/remove/pet/{id}',   'LikesPetController@remove')->where('id', '[1-9][0-9]*');
	
	//добавление и удаление лайка для фото
	Route::post('/likes/add/photo/{id}',    'LikesPhotoController@add')->where('id',    '[1-9][0-9]*');
	Route::post('/likes/remove/photo/{id}', 'LikesPhotoController@remove')->where('id', '[1-9][0-9]*');
	
});

	
	//получение каталога животных
	Route::get('/catalog',                  'PetsController@index');
	
	//получение хозяина животного и всех его животных
	Route::get('/owner/{pet}',               'PetsController@getOwner');

	//получение конкретного животного
	Route::get('/pet/{pet}',                'PetsController@getPet');


//получение публичных данных юзера
Route::get('/user/{user}', 'UserController@getUser');
