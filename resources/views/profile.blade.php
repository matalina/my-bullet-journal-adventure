@extends('layouts.app')

@section('content')
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
            <span
                class="p-3 border-solid border border-blue-900 m-2 rounded  opacity-75 cursor-not-allowed"   
            >
                <i class="fab fa-twitter"></i> Connected
            </span>
        @endif

        @if(! $user->hasSocial('facebook'))
            <x-button
                    type="link"
                    route="connect.facebook"
            >
                <i class="fab fa-facebook"></i> Connect
            </x-button>
        @else
            <span
                class="p-3 border-solid border border-blue-900 m-2 rounded  opacity-75 cursor-not-allowed"   
            >
                <i class="fab fa-facebook"></i> Connected
            </span>
        @endif

        @if(! $user->hasSocial('google'))
            <x-button
                    type="link"
                    route="connect.google"
            >
                <i class="fab fa-google"></i> Connect
            </x-button>
        @else
            <span
                class="p-3 border-solid border border-blue-900 m-2 rounded  opacity-75 cursor-not-allowed"   
            >
                <i class="fab fa-google"></i> Connected
            </span>
        @endif
        @if(! $user->hasSocial('github'))
            <x-button
                    type="link"
                    route="connect.github"
            >
                <i class="fab fa-github"></i> Connect
            </x-button>
        @else
            <span
                class="p-3 border-solid border border-blue-900 m-2 rounded  opacity-75 cursor-not-allowed"   
            >
                <i class="fab fa-github"></i> Connected
            </span>
        @endif
    </div>
@endsection
