<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function getUser(User $user){
        $data = $user->getUserData(false);
        return response()->json($data);
    }
	public function getOwner(User $user){
        $data = $user->getUserData(true);
        return response()->json($data);
	}
	/**
     * Метод добавляет юзера
     *
     * @param $user
     * @return JsonResponse
     */
	public function add($user){
		return response()->json(['message'=>'']);
	}
	/**
     * Метод изменяет юзера
     *
     * @param User $user
     * @return JsonResponse
     */
	public function update(User $user){
		return response()->json(['message'=>'']);
	}
	/**
     * Метод удаляет юзера
     *
     * @param User $user
     * @return JsonResponse
     */
	public function delete(User $user){
		return response()->json(['message'=>'']);
	}
}
