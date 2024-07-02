@extends('layout')
@section('title', 'Dashboard')
@section('content')
    

    <div class="mx-auto card" style="width: 500px; margin-top:180px; padding:60px">
        <h5 class="mb-4" style="text-align: center">Please Registration First</h5>
        <div style="display: flex; justify-content:space-between" class="mb-3">
            <a href="{{ route('login') }}" class="btn btn-danger col-5">Login</a>
            <a href="{{ route('registration') }}" class="btn btn-primary col-5">Registration</a>
        </div>
    </div>

@endsection
