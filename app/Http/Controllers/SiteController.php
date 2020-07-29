<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        return view('landing');
    }
    
    public function create()
    {
        return view('auth.social.login');
    }
    
    public function logout()
    {
        \Auth::logout();
        
        session()->flash('message', [
            'success' => true,
            'message' => 'Successfully logged out.',
            'code' => 'U1004',
            'info' => null,           
        ]);
        
        return redirect('/');
    }
    
    public function tos()
    {
        return view('tos');
    }
    
    public function privacy()
    {
        return view('privacy');
    }
}
