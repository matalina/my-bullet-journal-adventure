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
<body class="bg-gray-100 h-screen antialiased leading-none">
    <div id="app">
        <nav class="bg-blue-900 shadow m-0 py-6">
            <div class="container mx-auto px-6 md:px-0">
                <div class="flex items-center justify-center">
                    <div class="mr-6">
                        <a href="{{ url('/') }}" class="text-lg font-semibold text-gray-100 no-underline">
                            {{ config('app.name', 'Laravel') }}
                        </a>
                    </div>
                    <div class="flex-1 text-right">
                        @guest
                            <a class="no-underline hover:underline text-gray-300 text-sm p-3" href="{{ route('login') }}"><i class="fal fa-sign-in-alt"></i> Login</a>
                           
                            <a class="no-underline hover:underline text-gray-300 text-sm p-3" href="{{ route('login') }}"><i class="fal fa-user-plus"></i> Register</a>
                           
                        @else
                            <span class="text-gray-300 text-sm pr-4">
                                <i class="fal fa-user"></i>
                                {{ Auth::user()->name }}
                            </span>

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
        
        <main class="mt-8">
            @yield('content')
        </main>
    </div>
</body>
</html>
