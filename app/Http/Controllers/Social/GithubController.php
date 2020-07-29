<?php

namespace App\Http\Controllers\Social;

use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\Social\SocialController;
use Illuminate\Http\Request;
use App\Models\Social;
use App\Models\User;

class GithubController extends SocialController
{
    public function github()
    {
        return Socialite::driver('github')->redirect();
    }
    
    public function callback()
    {
        if(auth()->check()) {
            $providerUser = Socialite::driver('github')->user();
        
            $message = $this->connectSocial('github', $providerUser);

            session()->flash('message', $message);
            return redirect()->route('profile');
        }
        
        $user = Socialite::driver('github')->user();
        
        $social = Social::where('type','=','github')
            ->where('email','=',$user->email)
            ->first();
        
       if($social == null) {
            $message = $this->createUser('github', $user);
        }
        else {
            $message = $this->login($social);
        }
        
        session()->flash('message', $message);
        
        if($message['success']) {
            return redirect()->route('dashboard');
        }
        
        return redirect('/');
    }
}
