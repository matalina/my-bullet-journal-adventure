@extends('layouts.app')

@section('content')
<div>
    <h1>Profile</h1>

    <ul>
        <li><strong>Name:</strong> {{ $user->name }}</li>
        <li><strong>Email:</strong> {{ $user->email }}</li>
    </ul>

    <div class="flex">

        @if(! $user->hasSocial('twitter'))
            <x-button
                    type="link"
                    route="connect.twitter"
            >
                <i class="fab fa-twitter"></i> Connect
            </x-button>
        @else
            <i class="fab fa-twitter"></i> Connected
        @endif

        @if(! $user->hasSocial('facebook'))
            <x-button
                    type="link"
                    route="connect.facebook"
            >
                <i class="fab fa-facebook"></i> Connect
            </x-button>
        @else
                <i class="fab fa-facebook"></i> Connected
        @endif

        @if(! $user->hasSocial('google'))
            <x-button
                    type="link"
                    route="connect.google"
            >
                <i class="fab fa-google"></i> Connect
            </x-button>
        @else
            <i class="fab fa-google"></i> Connected
        @endif
        @if(! $user->hasSocial('github'))
            <x-button
                    type="link"
                    route="connect.github"
            >
                <i class="fab fa-github"></i> Connect
            </x-button>
        @else
                <i class="fab fa-github"></i> Connected
        @endif
    </div>
</div>
@endsection
