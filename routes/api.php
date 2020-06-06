<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return response()->json([
        'message' => 'private data received',
        'user' => $request->user()
    ]);
});

//получение каталога животных
Route::get('/catalog', 'PetsController@index');

//получение хозяина животного и всех его животных
Route::get('/owner/{id}', 'PetsController@getOwner');
