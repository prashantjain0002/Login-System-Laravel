@extends('layout')
@section('title', 'Registration')
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
        <form style="width: 500px; margin-top:180px; padding:60px" class="mx-auto card"
            action="{{ route('registration.post') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Full Name</label>
                <input type="text" class="form-control" name="name" placeholder="Please only use alphabets">
            </div>
            <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" placeholder="Enter Your Email">
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" name="password" minlength="8" placeholder="Give Minimum 8 Letter's Password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <span class="mt-4" style="text-align: center">If You Have a Account Please <a href="{{route('login')}}">Login</a></span>
        </form>
    </div>

@endsection
