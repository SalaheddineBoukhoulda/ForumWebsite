<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SocialAuth;

class SocialAuthController extends Controller
{
    public function auth($provider){
        return SocialAuth::authorize($provider);
    }

    public function authCallback($provider){
        SocialAuth::login($provider,function($user,$details){
            $user->name = $details->full_name;
            $user->email = $details->avatar;
            $user->avatar = $details->avatar;
            $user->save();
        });

        return redirect('/forum');
    }
}
