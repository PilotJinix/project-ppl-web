<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ReviewProduct;
use DB;

class ReviewProductController extends Controller
{
	public function review(Request $request, $id, $idDetail){
		$user = $request->session()->get('username');
		$akun = DB::table('users')->where('username',$user)->first();
		$user_id = $akun->id;

		$request->validate([
			'rating' => 'required|max:5',
			'review' => 'required|string|max:255',
		]);

		ReviewProduct::create([
			'rating' => $request->rating,
			'review' => $request->review,
			'user_id' => $user_id,
			'produk_id' => $id,
		]);

		DB::table('detail_checkout')->where('id', $idDetail)->update([
			'review' => 'sudah'
		]);

		return redirect()->back()->with('success','Terima Kasih sudah mendukung kami.');
	}
}
