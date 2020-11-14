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

    public function editUser(Request $request){
        $user = $request->session()->get('username');
        $akun = DB::table('users')->where('username',$user)->first();
        $id = $akun->id;
        
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|',
            'username' => 'required|string|max:100|regex:/^\S*$/u',
            'nomer_hp' => 'required|string|max:15',
            'alamat' => 'required|string|max:255',
        ]);

        DB::table('users')->where('id',$id)->update([
            'nama_lengkap' => $request->nama_lengkap,
            'email' => $request->email,
            'username' => $request->username,
            'nomer_hp' => $request->nomer_hp,
            'alamat' => $request->alamat,
        ]);
        
        /* merubah nilai username pada session */
        $request->session()->put('username', $request->username);

        return redirect('account')->with('edit-success','Edit profile berhasil!');
    }
}