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
        $user_id = $akun->id;

        $riwayat_pembelian = DB::table('detail_checkout')
		->join('produk', 'detail_checkout.produk_id','=','produk.id')
		->where('detail_checkout.user_id','=',$user_id)->select('detail_checkout.*','produk.nama','produk.harga','produk.gambar')->latest()
		->get();
        
        $status = $akun->status;
		return view('upgrade-mitra',compact('akun','status','riwayat_pembelian'));
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

        AjuanUser::create([
            'nama_lengkap' => $request->nama_lengkap,
            'email' => $request->email,
            'nik' => $request->nik,
            'nomer_hp' => $request->nomer_hp,
            'alamat' => $request->alamat,
            'ktp' => $nama_file,
            'no_rekening' => $request->rekening,
            'user_id' => $user_id,
        ]);

        DB::table('users')->where('id', $user_id)->update([
            'status' => 'proses',
        ]);
        
        $file->move($tujuan_upload,$nama_file);
        
        return redirect('account')->with('mitra-success','Pengajuan Berhasil');
    }

    public function mundurMitra($id){
        DB::table('users')->where('id',$id)->update([
            'status'=>'user',
            'foto_ktp' => null,
            'no_rekening' => null,
            'nik' => null,
            ]);

        DB::table('ajuan_user')->where('user_id',$id)->delete();

        return redirect()->route('profile-user')->with('successMundur','Anda Telah Mengundurkan Dari Mitra');
    }
}