<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function getUser(User $user){
        $data = $user->getUserData(true);
        return response()->json($data);
    }
}
