<?php

namespace App\Http\Controllers;

use Hash;
use Illuminate\Http\Request;
use Auth;
use Session;

class Authentication extends Controller
{
    function login()
    {
        return view('login');
    }

    function registration()
    {
        return view('registration');
    }
    function dashboard()
    {
        return view('dashboard');
    }

    function loginPost(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended(route('dashboard'));
        }

        return redirect(route('login'))->with("error", "Login Details are not valid");
    }

    public function registrationPost(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);

        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);
        $user = \App\Models\User::create($data);

        if (!$user) {
            return redirect(route('registration'))->with("error", "Registration Failed");
        }
        return redirect(route('login'))->with("success", "Registration Successfully Completed");
    }

    function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect(route('home'));
    }
}
