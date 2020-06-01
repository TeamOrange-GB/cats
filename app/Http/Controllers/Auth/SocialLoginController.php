<?php

namespace App\Http\Controllers\Auth;

use App\Adaptors\SocialAdaptor as Adaptor;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Socialite;
use App\Adaptors\SocialAdaptor;
use Illuminate\Support\Facades\Auth;


class SocialLoginController extends Controller
{

    public function login($social){
        return Socialite::with($social)->redirect();
    }

    public function response($social, Adaptor $userAdaptor){
        try {
            $user = Socialite::driver($social)->user();
        } catch (\Exception $exception) {
            abort(404);
        }

        $user = $userAdaptor->getUserBySocId($user, $social);

        Auth::login($user);
        return redirect()->route('home');
    }
}
