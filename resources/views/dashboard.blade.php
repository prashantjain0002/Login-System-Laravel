@extends('layout')
@section('title', 'Dashboard')
@section('content')
    @auth
        <div class="mx-auto card" style="width: 500px; margin-top:180px; padding:60px">
            <h2>Hello, <span>{{ auth()->user()->name }}</span></h2>
            <a href="{{ route('logout') }}" class="btn btn-success mt-4">LogOut</a>
        </div>
    @endauth
@endsection
