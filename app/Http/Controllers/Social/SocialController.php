<?php

namespace App\Http\Controllers\Social;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Social;
use App\Models\User; 
use App\Http\Controllers\Controller;

class SocialController extends Controller
{
    protected function createUser($type, $user)
    {
        
        $check = User::where('email','=',$user->email)->first();
        
        if($check != null) {
            return [
                'success' => false,
                'message' => 'An account already exists for this email address.',
                'code' => 'U9001',
                'info' => ['email' => $user->email],
            ];
        }
        
        
        $password = Str::random(10);
        
        $new_user = [
            'email' => $user->email,
            'password' => $password,
        ];
        
        $social = [
            'type' => $type,
            'email' => $user->email,
            'token' => $user->token,
        ];
        
        if(property_exists($user,'expiresIn')) {
            $data['expires'] = $user->expiresIn;
        }
           
        if(property_exists($user,'refreshToken')) {
            $data['refresh'] = $user->refreshToken;
        }
        
        if(property_exists($user,'name')) {
            $new_user['name'] = $user->name;
        }
           
        if(property_exists($user,'tokenSecret')) {
            $data['tokenSecret'] = $user->tokenSecret;
        }
        
        if(property_exists($user,'expiresIn')) {
            $data['expires'] = $user->expiresIn;
        }
        
        $new_user = User::create($new_user);   
        $social['user_id'] = $new_user->id;
        
        Social::create($social);
        
        \Auth::login($new_user);   
           
        return [
                'success' => true,
                'message' => 'Account Successfully Created and user logged in.',
                'code' => 'U1000',
                'info' => ['user' => auth()->user()],
            ];
    }
    
    protected function login(Social $social) 
    {
        \Auth::loginUsingId($social->user_id, true);
        
        return [
                'success' => true,
                'message' => 'User logged in successfully via web app',
                'code' => 'U1001',
                'info' => ['user' => auth()->user()],
            ];
    }
}
