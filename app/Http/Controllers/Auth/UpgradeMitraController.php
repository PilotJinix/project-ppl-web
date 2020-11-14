<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\AjuanUser;

class UpgradeMitraController extends Controller
{
    public function upgradeMitra(Request $request){
		$user = $request->session()->get('username');
		$akun = DB::table('users')->where('username',$user)->first();
		return view('upgrade-mitra',compact('akun'));
    }
    
    public function createMitra(Request $request){
        $session = $request->session()->get('username');
        $user = DB::table('users')->where('username',$session)->first();
        $user_id = $user->id;
        
        /* Validate Input Request */
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:ajuan_user',
            'nik' => 'required|string|max:100',
            'nomer_hp' => 'required|string|max:15',
            'alamat' => 'required|string|max:255',
            'ktp' => 'required|file|image|mimes:jpg,png,jpeg|max:2048',
            'rekening' => 'required|string|max:100',
        ]);

        $file = $request->file('ktp');
        $nama_file = time()."_".$file->getClientOriginalName();

        $tujuan_upload = "assets/images/ktp";
        $file->move($tujuan_upload,$nama_file);

        AjuanUser::create([
            'nama_lengkap' => $request->nama_lengkap,
            'email' => $request->email,
            'nik' => $request->nik,
            'no_hp' => $request->nomer_hp,
            'alamat' => $request->alamat,
            'ktp' => $nama_file,
            'no_rekening' => $request->rekening,
            'user_id' => $user_id,
        ]);
        
        return redirect('account')->with('success','Pengajuan Berhasil');
    }
}