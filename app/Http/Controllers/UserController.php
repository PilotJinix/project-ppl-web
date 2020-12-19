<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class UserController extends Controller
{
	public function index(Request $request){
		$session = $request->session()->get('username');
		if($session != null){
			return redirect()->route('dashboard');
		}
		/** Get information product from produk*/
		$product = DB::table('produk')->latest()->get();
		return view('home', compact('product'));
	}

	public function productDetail(Request $request, $id){
		$user = $request->session()->get('username');

		$url= url()->current();
		$fbShare = 'https://facebook.com/sharer/sharer.php?u='.$url.'&display=popup';

		$review = DB::table('review_product')->join('users','review_product.user_id','=','users.id')
			->where('produk_id',$id)->select('users.nama_lengkap','users.foto','review_product.*')->latest()->get();

		$rata = 0;
		foreach ($review as $item) {
			$rata = $rata + $item->rating;
		};
	
		if (count($review) != null) {
			$rataFinal = $rata / count($review);
		}else{
			$rataFinal = $rata;
		}

		/** Get information product */
		$product = DB::table('produk')->where('id',$id)->first();

		if($user != null){
			$akun = DB::table('users')->where('username',$user)->first();
			$user_id = $akun->id;

			$riwayat_pembelian = DB::table('detail_checkout')
			->join('produk', 'detail_checkout.produk_id','=','produk.id')
			->where('detail_checkout.user_id','=',$user_id)->select('detail_checkout.*','produk.nama','produk.harga','produk.gambar')->latest()
			->get();

			return view('product-detail', compact('akun','product','riwayat_pembelian','fbShare','review','rataFinal'));
		}

		$product = DB::table('produk')->where('id',$id)->first();
		return view('product-detail', compact('product','fbShare','review','rataFinal'));
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

		$product = DB::table('produk')->orderBy('stok','desc')->paginate(20);

		if ($user != null) {
			$akun = DB::table('users')->where('username',$user)->first();
			$user_id = $akun->id;

			$riwayat_pembelian = DB::table('detail_checkout')
			->join('produk', 'detail_checkout.produk_id','=','produk.id')
			->where('detail_checkout.user_id','=',$user_id)->select('detail_checkout.*','produk.nama','produk.harga','produk.gambar')->latest()
			->get();

			return view('shop', compact('akun','product','riwayat_pembelian'));
		}

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

	public function blog(Request $request){
		$user = $request->session()->get('username');

		$blog = DB::table('blog')->latest()->paginate(6);

		if ($user != null) {
			$akun = DB::table('users')->where('username',$user)->first();
			$user_id = $akun->id;

			$riwayat_pembelian = DB::table('detail_checkout')
			->join('produk', 'detail_checkout.produk_id','=','produk.id')
			->where('detail_checkout.user_id','=',$user_id)->select('detail_checkout.*','produk.nama','produk.harga','produk.gambar')->latest()
			->get();

			return view('blog', compact('akun','riwayat_pembelian','blog'));
		}

		/** Get information product from produk*/
		return view('blog', compact('blog'));
	}

	public function blogDetail(Request $request, $id){
		$user = $request->session()->get('username');

		$blog = DB::table('blog')->where('id', $id)->first();
		$latestBlog = DB::table('blog')->latest()->limit(4)->get();

		if ($user != null) {
			$akun = DB::table('users')->where('username',$user)->first();
			$user_id = $akun->id;

			$riwayat_pembelian = DB::table('detail_checkout')
			->join('produk', 'detail_checkout.produk_id','=','produk.id')
			->where('detail_checkout.user_id','=',$user_id)->select('detail_checkout.*','produk.nama','produk.harga','produk.gambar')->latest()
			->get();

			return view('blogdetail', compact('akun','riwayat_pembelian','blog','latestBlog'));
		}

		/** Get information product from produk*/
		return view('blogdetail', compact('blog','latestBlog'));
	}
}