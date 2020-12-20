<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use DB;
use App\User;
use App\Notifications\Checkout;

class LoginController extends Controller
{
    public function login()
    {
      return view('auth.login');
    }
    
    public function authenticate(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
          $request->session()->put('username', $request->username);
          return redirect()->intended('dashboard');
        }

        return redirect('login')->with('error', 'Oppes! You have entered invalid credentials');
    }

    public function logout(Request $request) {
      $request->session()->forget('username');
      Auth::logout();

      return redirect('login');
    }

    public function home(Request $request){
      $session = $request->session()->get('username');

      if ($session == null) {
        return redirect()->route('home');
      }
      $akun = DB::table('users')->where('username',$session)->first();
      $user_id = $akun->id;

      $riwayat_pembelian = DB::table('detail_checkout')
      ->join('produk', 'detail_checkout.produk_id','=','produk.id')
      ->where('detail_checkout.user_id','=',$user_id)->select('detail_checkout.*','produk.nama','produk.harga','produk.gambar')->latest()
      ->get();

      /** Get information product from produk*/
      $product = DB::table('produk')->orderBy('stok','desc')->limit(16)->get();
      return view('home', compact('akun','product','riwayat_pembelian'));	
    }
}