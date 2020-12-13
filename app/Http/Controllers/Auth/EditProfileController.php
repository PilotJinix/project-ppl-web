<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\User;
use Hash;
use Image;

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
            'rekening' => 'required|string|max:255',
        ]);

        DB::table('users')->where('id',$id)->update([
            'nama_lengkap' => $request->nama_lengkap,
            'email' => $request->email,
            'username' => $request->username,
            'nomer_hp' => $request->nomer_hp,
            'alamat' => $request->alamat,
            'no_rekening' => $request->rekening,
        ]);
        
        /* merubah nilai username pada session */
        $request->session()->put('username', $request->username);

        return redirect('account')->with('edit-success','Edit profile berhasil!');
    }

    public function editPassword(Request $request){
        $user = $request->session()->get('username');
        $akun = DB::table('users')->where('username',$user)->first();
        $id = $akun->id;
        
        $request->validate([
            'password_lama' => 'required|string',
            'password' => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required',
        ]);
        
        $password_lama = $request->password_lama;

        if (Hash::check($password_lama,$akun->password)) {
            DB::table('users')->where('id',$id)->update([
                'password' => Hash::make($request->password),
            ]);
            return redirect()->route('edit-profile')->with('successUpdate','Password Anda Berhasil DiUbah!');
        }
        return redirect()->route('edit-profile')->with('error-password','Password Lama Anda Salah!');
    }

    public function editFoto(Request $request){
        $user = $request->session()->get('username');
        $akun = DB::table('users')->where('username',$user)->first();
        $id = $akun->id;

        $request->validate([
            'foto_profile' => 'required|file|image|mimes:jpg,jpeg,png,gif',
        ]);
        
        $foto = $request->file('foto_profile');
        $nama_foto = time()."_".$foto->getClientOriginalName();
        $tujuan_upload = "assets/images/people/";

        $img = Image::make($foto->getRealPath());

        DB::table('users')->where('id',$id)->update([
            'foto' => $nama_foto,
        ]);
        $img = Image::make($foto->getRealPath());
        $img->resize(512,512)->save($tujuan_upload.$nama_foto);
        
        return redirect()->route('edit-profile');
    }
}