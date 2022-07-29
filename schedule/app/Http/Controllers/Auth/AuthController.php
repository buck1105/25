<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRule;
use App\Http\Requests\Auth\RegisterRule;
use App\Models\User;
use App\Mail\SendMailRegister;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Socialite;
use Mail;
use App\Jobs\SendEmail;

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
            if (Auth::attempt(['email' => trim($request->email), 'password' => trim($request->password), 'role' => [0, 1, 2]])) {
                $user = User::query()->where('email', $request->email)->sole();
                Session::put('name', $user->name);
                Session::put('email', $user->email);
                Session::put('avatar', $user->image);
                return redirect()->route('admin.dashboard');
            }
        } catch (\Exception $e) {
//            return back()->withErrors('msg', 'Tên tài khoản hoặc mật khẩu không chính xác')->withInput();
            return back()->with('msg', 'Tên tài khoản hoặc mật khẩu không chính xác');
        }


    }

    public function processRegister(RegisterRule $request)
    {
//        DB::beginTransaction();
        try {
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = trim(Hash::make($request->password));
            $user->save();
//            DB::commit();
            return redirect()->route('login');
        } catch (\Exception $e) {
//            DB::rollBack();
//            return back()->withErrors('msg', 'Tên tài khoản hoặc mật khẩu không đã tồn tại')->withInput();
            return back()->with('msg', 'Tên tài khoản hoặc mật khẩu không đã tồn tại')->withInput();
        }

    }

    public function logout()
    {
        session()->flush();
        Auth::logout();
        return redirect()->route('login');
    }

    public function callback($provider)
    {
        if (!empty($provider) && $provider == 'google') {
            try {
                $user = new User();
                $google = Socialite::driver($provider)->user();
                $user['specialist_id'] = 2;
                // $user['id'] = $google['id'];
                $user['name'] = $google['name'];
                $user['email'] = $google['email'];
                $user['password'] ='$2a$12$1nfzJZp4q2xS7XB6u8TirOcMLKZw1jlaIRG184MZQCaRCiiNeujGm';
                $user['role'] = 3;
                $user->save();
                // Mail::to($user['email'])->send(new SendMailRegister($user));
                dispatch(new SendEmail($user));
                return redirect()->route('login');

            } catch (Exception $e) {
              return back()->with(['msg' => 'Roor']);
          }
      }
      elseif (!empty($provider) && $provider == 'github') {
        $github = Socialite::driver($provider)->user();
            // $user['id'] = $github['id'];
            // $user['name'] = $github['name'];
            // $user['email'] = $github['email'];
        dd($github);
    } 
    else{
        // $instagram = Socialite::driver($provider)->user();
        // dd($instagram);
        dd(1);
    }
}
}
