<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\AjuanProduk;

class AjuanProdukController extends Controller
{
    public function index(Request $request){
        $user = $request->session()->get('username');
        $akun = DB::table('users')->where('username',$user)->first();
        $user_id = $akun->id;

        if ($akun->status != 'mitra') {
            return redirect()->route('dashboard');
        };

        $riwayat_pembelian = DB::table('detail_checkout')
		->join('produk', 'detail_checkout.produk_id','=','produk.id')
		->where('detail_checkout.user_id','=',$user_id)->select('detail_checkout.*','produk.nama','produk.harga','produk.gambar')->latest()
        ->get();
        
        $patokan_harga = DB::table('patokan_harga')->get();
        
        $status = $akun->status;
		return view('ajuanproduk',compact('akun','status','riwayat_pembelian','patokan_harga'));
    }

    public function tambah(Request $request){
        $user = $request->session()->get('username');
        $akun = DB::table('users')->where('username',$user)->first();
        $user_id = $akun->id;

        $request->validate([
            'nama_produk' => 'string|required|max:255',
            'berat_produk' => 'required|string|max:100',
            'foto_produk' => 'required|file|image|mimes:jpg,png,jpeg,webp',
            'deskripsi_produk' => 'required|string|max:5000'
        ]);

        $file = $request->file('foto_produk');
        $nama_file = time()."_".$file->getClientOriginalName();

        $tujuan_upload = "assets/images/mitra/";

        $link_foto = $tujuan_upload.$nama_file;
        
        AjuanProduk::create([
            'nama_produk' => $request->nama_produk,
            'berat_produk' => $request->berat_produk,
            'foto_produk' => $link_foto,
            'deskripsi_produk' => $request->deskripsi_produk,
            'user_id' => $user_id,
        ]);

        $file->move($tujuan_upload,$nama_file);

        return redirect()->route('ajuan-produk')->with('ajuan-success','Ajuan Anda Berhasil Terkirim');
    }

    public function riwayat(Request $request){
        $user = $request->session()->get('username');
        $akun = DB::table('users')->where('username',$user)->first();
        $user_id = $akun->id;

        if ($akun->status != 'mitra') {
            return redirect()->route('dashboard');
        };

        $riwayat_pembelian = DB::table('detail_checkout')
		->join('produk', 'detail_checkout.produk_id','=','produk.id')
		->where('detail_checkout.user_id','=',$user_id)->select('detail_checkout.*','produk.nama','produk.harga','produk.gambar')->latest()
        ->get();

        $detail = DB::table('ajuan_produk_mitra')->where('user_id', $user_id)->latest()->get();
        
        return view('riwayatprodukmitra',compact('akun','riwayat_pembelian','detail'));
    }
}