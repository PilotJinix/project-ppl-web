<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\User;

class EditProfileController extends Controller
{
    public function editProfile(Request $request){
		$user = $request->session()->get('username');
		$akun = DB::table('users')->where('username',$user)->first();
		return view('edit-profile',compact('akun'));
    }

    public function edit(Request $request){
        $user = $request->session()->get('username');
        $akun = DB::table('users')->where('username',$user)->first();
        
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'username' => 'required|string|max:100',
            'nomer_hp' => 'required|string|max:15',
            'alamat' => 'required|string|max:255',
        ]);
    }
}