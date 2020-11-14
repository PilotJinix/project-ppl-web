<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use DB;

class LoginController extends Controller
{
    public function login()
    {

      return view('auth.login');
    }
    public function authenticate(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
          $request->session()->put('username', $request->username);
          return redirect()->intended('/');
        }

        return redirect('login')->with('error', 'Oppes! You have entered invalid credentials');
    }

    public function logout() {
      Auth::logout();

      return redirect('login');
    }
}