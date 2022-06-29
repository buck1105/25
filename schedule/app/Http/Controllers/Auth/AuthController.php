<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRule;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login() {
        return view('auth.login');
    }

    public function register() {
        return view('auth.signup');
    }

    public function processLogin(LoginRule $request) {
        dd($request->all());
//        return redirect()->route('admin.dashboard');
    }
}
