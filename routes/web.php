<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Authentication;

Route::get('/', function () {
    return view('welcome');
}) -> name('home');

Route::get('/login', [Authentication::class, 'login']) -> name(name: 'login');
Route::post('/login', [Authentication::class, 'loginPost']) -> name(name: 'login.post');

Route::get('/registration', [Authentication::class, 'registration']) -> name(name: 'registration');
Route::post('/registration', [Authentication::class, 'registrationPost']) -> name(name: 'registration.post');

Route::get('/dashboard', [Authentication::class, 'dashboard']) -> name(name: 'dashboard');

Route::get('/logout', [Authentication::class, 'logout']) -> name(name: 'logout');