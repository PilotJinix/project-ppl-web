<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class UserController extends Controller
{
	public function index(Request $request){
		$user = $request->session()->get('username');
		$akun = DB::table('users')->where('username',$user)->first();

		/** Get information product from produk*/
		$product = DB::table('produk')->get();
		return view('home', compact('akun','product'));	
	}
	public function productDetail(Request $request, $id){
		$user = $request->session()->get('username');
		$akun = DB::table('users')->where('username',$user)->first();

		/** Get information product */
		$product = DB::table('produk')->where('id',$id)->first();
		return view('product-detail', compact('akun','product'));
	}
	public function about(Request $request){
		$user = $request->session()->get('username');
		$akun = DB::table('users')->where('username',$user)->first();
		return view('about', compact('akun'));
	}
	public function shop(Request $request){
		$user = $request->session()->get('username');
		$akun = DB::table('users')->where('username',$user)->first();

		/** Get information product from produk*/
		$product = DB::table('produk')->get();
		return view('shop', compact('akun','product'));
	}
	public function my_account(Request $request){
		$user = $request->session()->get('username');
		$akun = DB::table('users')->where('username',$user)->first();
		return view('my-account', compact('akun'));
	}
}