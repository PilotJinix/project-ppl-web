<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class UserController extends Controller
{
	public function index(Request $request){
		/** Get information product from produk*/
		$product = DB::table('produk')->latest()->get();
		return view('home', compact('product'));	
	}
	public function productDetail(Request $request, $id){
		$user = $request->session()->get('username');
		if($user != null){
			$akun = DB::table('users')->where('username',$user)->first();
			$user_id = $akun->id;

			$riwayat_pembelian = DB::table('detail_checkout')
			->join('produk', 'detail_checkout.produk_id','=','produk.id')
			->where('detail_checkout.user_id','=',$user_id)->select('detail_checkout.*','produk.nama','produk.harga','produk.gambar')->latest()
			->get();

			/** Get information product */
			$product = DB::table('produk')->where('id',$id)->first();
			return view('product-detail', compact('akun','product','riwayat_pembelian'));
		}

		/** Get information product */
		$product = DB::table('produk')->where('id',$id)->first();
		return view('product-detail', compact('product'));
	}

	public function about(Request $request){
		$user = $request->session()->get('username');
		if ($user != null) {
			$akun = DB::table('users')->where('username',$user)->first();
			$user_id = $akun->id;

			$riwayat_pembelian = DB::table('detail_checkout')
			->join('produk', 'detail_checkout.produk_id','=','produk.id')
			->where('detail_checkout.user_id','=',$user_id)->select('detail_checkout.*','produk.nama','produk.harga','produk.gambar')->latest()
			->get();

			return view('about', compact('akun','riwayat_pembelian'));
		}
		return view('about');
	}
	public function shop(Request $request){
		$user = $request->session()->get('username');
		if ($user != null) {
			$akun = DB::table('users')->where('username',$user)->first();
			$user_id = $akun->id;

			$riwayat_pembelian = DB::table('detail_checkout')
			->join('produk', 'detail_checkout.produk_id','=','produk.id')
			->where('detail_checkout.user_id','=',$user_id)->select('detail_checkout.*','produk.nama','produk.harga','produk.gambar')->latest()
			->get();
			$product = DB::table('produk')->latest()->get();

			return view('shop', compact('akun','product','riwayat_pembelian'));
		}

		/** Get information product from produk*/
		$product = DB::table('produk')->latest()->get();
		return view('shop', compact('product'));
	}
	public function my_account(Request $request){
		$user = $request->session()->get('username');
		$akun = DB::table('users')->where('username',$user)->first();
		$user_id = $akun->id;

		$riwayat_pembelian = DB::table('detail_checkout')
		->join('produk', 'detail_checkout.produk_id','=','produk.id')
		->where('detail_checkout.user_id','=',$user_id)->select('detail_checkout.*','produk.nama','produk.harga','produk.gambar')->latest()
		->get();
		
		return view('my-account', compact('akun','riwayat_pembelian'));
	}
}