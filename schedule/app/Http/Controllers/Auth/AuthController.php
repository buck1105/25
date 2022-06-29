<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login() {
        return view('auth.login');
    }

    public function register() {
        return view('auth.signup');
    }

    public function processLogin(LoginRule $request) {
       if (Auth::guard('admin')->attempt(['email'=>$request->email, 'password' => $request->password])){
        return redirect()->route('admin.dashboard');
       }
       return back()->withErrors('msg', 'Tên tài khoản hoặc mật khẩu không chính xác')->withInput();

    }
}
