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
	Route::put(   '/likes/pet/{id}',   'LikesPetController@add')->where('id',    '[1-9][0-9]*');
	Route::delete('/likes/pet/{id}',   'LikesPetController@remove')->where('id', '[1-9][0-9]*');
	
	//добавление и удаление лайка для фото
	Route::put(   '/likes/photo/{id}', 'LikesPhotoController@add')->where('id',    '[1-9][0-9]*');
	Route::delete('/likes/photo/{id}', 'LikesPhotoController@remove')->where('id', '[1-9][0-9]*');
	
	//добавление, изменение и удаление животного
	Route::put(   '/pets',             'PetsController@add');
	Route::post(  '/pets/{pet}',       'PetsController@update');
	Route::delete('/pets/{pet}',       'PetsController@delete');
	
	//добавление, изменение и удаление юзера
	Route::put(   '/users',            'UserController@add');
	Route::post(  '/users/{user}',     'UserController@update');
	Route::delete('/users/{user}',     'UserController@delete');
});

	//получение каталога животных
	Route::get('/pets',                'PetsController@index');
	//получение конкретного животного
	Route::get('/pets/{pet}',          'PetsController@getPet');
	

	//получение публичных данных юзера
	Route::get('/users/{user}',        'UserController@getUser');
	
	Route::get('/users/{user}/pets',   'UserController@getOwner');
	//получение хозяина животного и всех его животных
#	Route::get('/owner/{pet}',        'PetsController@getOwner');

/*
|--------------------------------------------------------------------------
| Ловушка для всех остальных запросов к API
|--------------------------------------------------------------------------
*/
Route::get('/{any}', function(){
	return response()->json(['message' => 'bad url']);
})->where('any', '.*');