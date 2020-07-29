@extends('layouts.app')

@section('content')

<h1>
    Profile
</h1>

<ul>
    <li><strong>Name:</strong> {{ $user->name }}</li>
    <li><strong>Email:</strong> {{ $user->email }}</li>
</ul>

@endsection
