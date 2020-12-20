<?php

namespace App\Http\Controllers\Admin\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use App\Admin;

class LoginController extends Controller
{
    public function index(){
        return view('admin.auth.login');
    }

    public function authenticate(Request $data){
        $data->validate([
            'username' => 'required',
            'password' => 'required|min:8',
        ]);

        $credentials = $data->only('username','password');

//       if (Auth::guard('admins')->attempt($credentials)) {
            $data->session()->put('admin', $data->username);
            return redirect()->intended(route('admin.dashboard'));
//       }
//
//       return redirect()->route('admin.login')->with('error','OOPSs! Data Yang Kamu Masukkan Salah');
    }

    public function logout(Request $request){
        $request->session()->forget('admin');
//        Auth::guard('admin')->logout();

        return redirect()->route('admin.login');
    }

}
