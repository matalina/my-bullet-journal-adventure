@extends('layouts.app')

@section('content')

<div class="bg-white w-5/6 mx-auto p-3 rounded-lg">
    <h1>
        My Account
    </h1>
    <p>
        Use one of the following platforms to create a new account or log into an existing account.
    </p>
    <p class="text-sm text-gray-500">
        Be aware that the platform email address is associated to your account, and you may only have one account per email.
    </p>
    <div class="flex">
        
        <x-button
            type="link"      
            route="twitter"
        >
            <i class="fab fa-twitter"></i> Twitter
        </x-button>
        
        <x-button
            type="link"      
            route="facebook"
        >
            <i class="fab fa-facebook"></i> Facebook
        </x-button>
        
        <x-button
            type="link"      
            route="google"
        >
            <i class="fab fa-google"></i> Google
        </x-button>
        
        <x-button
            type="link"      
            route="github"
        >
            <i class="fab fa-github"></i> Github
        </x-button>
    </div>
</div>

@endsection