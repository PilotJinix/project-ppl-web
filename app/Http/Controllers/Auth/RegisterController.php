<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Hash;

class RegisterController extends Controller
{

  public function store(Request $request)
  {
      $request->validate([
          'nama_lengkap' => 'required|string|max:255',
          'email' => 'required|string|email|max:255|unique:users',
          'username' => 'required|string|max:100|regex:/^\S*$/u',
          'nomer_hp' => 'required|string|max:15',
          'alamat' => 'required|string|max:255',
          'password' => 'required|string|min:8|confirmed',
          'password_confirmation' => 'required',
      ]);

      User::create([
          'nama_lengkap' => $request->nama_lengkap,
          'username' => $request->username,
          'email' => $request->email,
          'nomer_hp' => $request->nomer_hp,
          'alamat' => $request->alamat,
          'password' => Hash::make($request->password),
      ]);

      return redirect('login')->with('success','Register Berhasil');
  }
  public function register()
  {
    return view('auth.register');
  }

}