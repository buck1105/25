<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRule;
use App\Http\Requests\Auth\RegisterRule;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.signup');
    }

    public function processLogin(LoginRule $request)
    {

        try {
            if (Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password])) {
                session()->put(['name' => $request->name]);
                return redirect()->route('admin.dashboard');
            }
        } catch (\Exception $e) {
            return back()->withErrors('msg', 'Tên tài khoản hoặc mật khẩu không chính xác')->withInput();
        }


    }

    public function processRegister(RegisterRule $request)
    {
        try {
            DB::beginTransaction();
            $doctor = new User();
            $doctor->name = $request->name;
            $doctor->email = $request->email;
            $doctor->password = Hash::make($request->password);
            $doctor->save();
            DB::commit();
            return redirect()->route('login');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->withErrors('msg', 'Tên tài khoản hoặc mật khẩu không đã tồn tại')->withInput();
        }

    }
}
