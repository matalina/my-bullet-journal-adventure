<?php

namespace App\Http\Controllers;

use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\Social\SocialController;
use Illuminate\Http\Request;
use App\Models\Social;
use App\Models\User;

class ProfileController extends SocialController
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $user = auth()->user()->load('social');
        
        return view('profile')
            ->with('user',$user);
    }
    
    public function update()
    {
        
    }
}
