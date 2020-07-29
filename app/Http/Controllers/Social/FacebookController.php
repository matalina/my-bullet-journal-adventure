<?php

namespace App\Http\Controllers\Social;

use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\Social\SocialController;
use Illuminate\Http\Request;
use App\Models\Social;
use App\Models\User;

class FacebookController extends SocialController
{
    public function facebook()
    {
        return Socialite::driver('facebook')->redirect();
    }
    
    public function callback()
    {
        if(auth()->check()) {
            $providerUser = Socialite::driver('facebook')->user();
        
            $message = $this->connectSocial('facebook', $providerUser);

            session()->flash('message', $message);
            return redirect()->route('profile');
        }
        
        $user = Socialite::driver('facebook')->user();
        
        $social = Social::where('type','=','facebook')
            ->where('email','=',$user->email)
            ->first();
        
        if($social == null) {
            $message = $this->createUser('facebook', $user);
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
