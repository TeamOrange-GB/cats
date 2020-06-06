<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Роуты аутентификации.
|--------------------------------------------------------------------------
|
| Я поставил тут только необходимые роуты из Auth::routes().
| Закоментированные можно реализовать позже.
|
*/

Route::namespace('Auth')->group(function (){
    Route::post('register', 'RegisterController@register');
    Route::post('login', 'LoginController@login');
    Route::post('logout', 'LoginController@logout');

    Route::middleware('guest')->group(function(){
        //аутентификация через соцсети
        Route::get('login/{social}', 'SocialLoginController@login');
        Route::get('login/{social}/callback', 'SocialLoginController@response');
    });

//TODO это можно реализовать позже
//    Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail');
//    Route::post('password/reset', 'ResetPasswordController@reset');
//    Route::middleware('auth')->group(function(){
//        Route::post('password/confirm', 'ConfirmPasswordController@confirm');
//    });
});


/*
|--------------------------------------------------------------------------
| Главный роут, возвращает вьюху Vue SPA
|--------------------------------------------------------------------------
*/
Route::view('/{any}', 'index')->where('any', '.*');


/*
|--------------------------------------------------------------------------
| Роут нужен для переадресации после регистрации через соцсети. Он почти такой же как и перед ним.
|--------------------------------------------------------------------------
*/
Route::view('/', 'index')->where('any', '.*')->name('home');
