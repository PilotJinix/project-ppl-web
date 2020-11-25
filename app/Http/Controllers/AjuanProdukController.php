<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AjuanProdukController extends Controller
{
    public function index(Request $request){
        $user = $request->session()->get('username');
        $akun = DB::table('users')->where('username',$user)->first();
        $user_id = $akun->id;

        $riwayat_pembelian = DB::table('detail_checkout')
		->join('produk', 'detail_checkout.produk_id','=','produk.id')
		->where('detail_checkout.user_id','=',$user_id)->select('detail_checkout.*','produk.nama','produk.harga','produk.gambar')->latest()
		->get();
        
        $status = $akun->status;
		return view('ajuanproduk',compact('akun','status','riwayat_pembelian'));
    }
}