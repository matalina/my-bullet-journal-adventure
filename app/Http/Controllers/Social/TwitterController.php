<?php

namespace App\Http\Controllers\Social;

use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\Social\SocialController;
use Illuminate\Http\Request;
use App\Models\Social;
use App\Models\User;

class TwitterController extends SocialController
{
    public function twitter()
    {
        return Socialite::driver('twitter')->redirect();
    }
    
    public function callback()
    {
        $user = Socialite::driver('twitter')->user();
        
        $social = Social::where('type','=','twitter')
            ->where('email','=',$user->email)
            ->first();
        
        if($social == null) {
            $message = $this->createUser('twitter', $user);
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
