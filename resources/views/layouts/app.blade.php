<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}"/>

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="https://kit.fontawesome.com/8f19efb5ed.js" crossorigin="anonymous"></script>
    <livewire:scripts/>
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet"/>
    <livewire:styles/>
</head>
<body class="bg-white h-screen antialiased leading-none">
    <div id="app" class="flex flex-col min-h-screen">
        <nav class="bg-blue-900 shadow m-0 py-6">
            <div class="container mx-auto px-6 md:px-0">
                <div class="flex items-center justify-center">
                    <div class="mr-6">
                        @guest
                        <a href="{{ route('home') }}" class="text-lg font-semibold text-gray-100 no-underline">
                            {{ config('app.name', 'Laravel') }}
                        </a>
                        @else
                        <a href="{{ route('dashboard') }}" class="text-lg font-semibold text-gray-100 no-underline">
                            {{ config('app.name', 'Laravel') }}
                        </a>
                        @endguest
                    </div>
                    <div class="flex-1 text-right">
                        @guest
                            <a class="no-underline hover:underline text-gray-300 text-sm p-3" href="{{ route('login') }}"><i class="fal fa-sign-in-alt"></i> Login</a>
                           
                            <a class="no-underline hover:underline text-gray-300 text-sm p-3" href="{{ route('login') }}"><i class="fal fa-user-plus"></i> Register</a>
                           
                        @else
                            <a class="no-underline hover:underline text-gray-300 text-sm p-3" href="{{ route('profile') }}">
                                <i class="fal fa-user"></i>
                                {{ Auth::user()->name }}
                            </a>

                            <span>
                                <i class="fal fa-sign-out-alt"></i>
                                <a href="{{ route('logout') }}"
                                   class="no-underline hover:underline text-gray-300 text-sm p-3"
                                   onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();"><i class="fal fa-sign-out-alt"></i> Logout</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                    {{ csrf_field() }}
                                </form>
                            </span>
                        @endguest
                    </div>
                </div>
            </div>
        </nav>
        
        <x-message :message="session('message')"></x-message>
        
        <main class="flex-grow">
            @yield('content')
        </main>
        
        <footer class="text-sm bg-blue-900 text-white py-2 px-5">
            Copyright 2020 
            @if(date('Y') != 2020)
                - {{ date('Y') }}
            @endif
            | <a href="{{ route('tos') }}">Terms of Service</a> | 
            <a href="{{ route('privacy') }}">Privacy Policy</a>
        </footer>     
    </div>
</body>
</html>
