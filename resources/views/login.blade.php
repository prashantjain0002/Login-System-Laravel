@extends('layout')
@section('title', 'Login')
@section('content')
    <div class="container mx-auto p-2">
        <div class="m-5">
            @if ($errors->any())
                <div class="col-12">
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger">{{ $error }}</div>
                    @endforeach
                </div>
            @endif

            @if (session()->has('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif

            @if (session()->has('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
        </div>
        <form style="width: 500px; margin-top:180px; padding:60px" class="mx-auto card" action="{{route('login.post')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="email" class="form-control" name="email">
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" name="password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <span class="mt-4" style="text-align: center">If You Have Not a Account <a href="{{route('registration')}}">Click Here</a></span>
        </form>
        
    </div>

@endsection
