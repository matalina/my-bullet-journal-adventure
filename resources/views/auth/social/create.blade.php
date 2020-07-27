@extends('layouts.app')

@section('content')
    <div class="bg-white w-5/6 mx-auto p-3 rounded-lg">
        <h1>
            Register
        </h1>
        
        <form class="w-full p-6" method="POST" action="{{ route('register', ['type' => $type]) }}">
            @csrf

            <div class="flex flex-wrap mb-6">
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">
                    Name
                </label>

                <input id="name" type="text" class="form-input w-full @error('name')  border-red-500 @enderror" name="name" value="{{ old('name',$user->name) }}" required autocomplete="name" autofocus>

                @error('name')
                    <p class="text-red-500 text-xs italic mt-4">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div class="flex flex-wrap mb-6">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">
                    Email
                </label>

                <input id="email" type="email" class="form-input w-full @error('email') border-red-500 @enderror" name="email" value="{{ old('email',$user->email) }}" required autocomplete="email">

                @error('email')
                    <p class="text-red-500 text-xs italic mt-4">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div class="flex flex-wrap mb-6">
                <label for="password" class="block text-gray-700 text-sm font-bold mb-2">
                    Password:
                </label>

                <input id="password" type="password" class="form-input w-full @error('password') border-red-500 @enderror" name="password" required autocomplete="new-password">

                @error('password')
                    <p class="text-red-500 text-xs italic mt-4">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div class="flex flex-wrap mb-6">
                <label for="password-confirm" class="block text-gray-700 text-sm font-bold mb-2">
                    Comfirm Password
                </label>

                <input id="password-confirm" type="password" class="form-input w-full" name="password_confirmation" required autocomplete="new-password">
            </div>

            <div class="flex flex-wrap">
                <x-button
                    type="button"                
                >
                    Register
                </x-button>
            </div>
        </form>
    </div>         
@endsection
