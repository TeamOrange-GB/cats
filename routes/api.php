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
	Route::put(   '/like/pet/{id}',   'LikesPetController@add')->where('id',    '[1-9][0-9]*');
	Route::delete('/like/pet/{id}',   'LikesPetController@remove')->where('id', '[1-9][0-9]*');
	
	//добавление и удаление лайка для фото
	Route::put(   '/like/photo/{id}', 'LikesPhotoController@add')->where('id',    '[1-9][0-9]*');
	Route::delete('/like/photo/{id}', 'LikesPhotoController@remove')->where('id', '[1-9][0-9]*');
	
	//добавление, изменение и удаление животного
	Route::put(   '/pet',             'PetsController@add');
	Route::post(  '/pet/{pet}',       'PetsController@update');
	Route::delete('/pet/{pet}',       'PetsController@delete');
	
	//добавление, изменение и удаление юзера
	Route::put(   '/user',            'UserController@add');
	Route::post(  '/user/{user}',     'UserController@update');
	Route::delete('/user/{user}',     'UserController@delete');
});

	//получение каталога животных
	Route::get('/pet',                'PetsController@index');
	//получение конкретного животного
	Route::get('/pet/{pet}',          'PetsController@getPet');
	

	//получение публичных данных юзера
	Route::get('/user/{user}',        'UserController@getUser');
	
	Route::get('/user/{user}/pets',   'UserController@getOwner');
	//получение хозяина животного и всех его животных
#	Route::get('/owner/{pet}',        'PetsController@getOwner');

/*
|--------------------------------------------------------------------------
| Ловушка для всех остальных запросов к API
|--------------------------------------------------------------------------
*/
Route::get('/{any}', function(){
	return 'bad url';
})->where('any', '.*');