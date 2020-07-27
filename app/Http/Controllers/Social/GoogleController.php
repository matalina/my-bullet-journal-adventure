<?php

namespace App\Http\Controllers\Social;

use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\Social\SocialController;
use Illuminate\Http\Request;
use App\Models\Social;
use App\Models\User;

class GoogleController extends SocialController
{
    public function google()
    {
        return Socialite::driver('google')->redirect();
    }
    
    public function callback()
    {
        $user = Socialite::driver('google')->user();
        
        $social = Social::where('type','=','google')
            ->where('email','=',$user->email)
            ->first();
        
        if($social == null) {
            $message = $this->createUser('google', $user);
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
