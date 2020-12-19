<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class TransaksiController extends Controller
{
    public function index(Request $request){
        $session = $request->session()->get('admin');
        if ($session == null) {
            return redirect()->route("admin.login");
        }
        $pages = 'riwayat-transaksi';

        $riwayat = DB::table('detail_checkout')->latest()->get();

        return view('admin.riwayattransaksi', compact('pages','riwayat'));
    }

    public function invoice(Request $request, $id){
        $session = $request->session()->get('admin');
        if ($session == null) {
            return redirect()->route("admin.login");
        }
        $pages = 'invoice';

        $detail = DB::table('produk')
		->join('detail_checkout', 'detail_checkout.produk_id','=','produk.id')
		->where('detail_checkout.id','=',$id)
        ->get();

        return view('admin.invoice',compact('pages','detail'));
    }

    public function terimaPembayaran($id){

        DB::table('detail_checkout')->where('id',$id)->update([
            'status_checkout' => 'Proses Pengiriman',
        ]);

        $pages = 'invoice';
        return redirect()->route('admin.invoice', $id);
    }
    public function tolakPembayaran($id){

        DB::table('detail_checkout')->where('id',$id)->update([
            'status_checkout' => 'Dibatalkan',
        ]);

        $detail = DB::table('detail_checkout')->where('id',$id)->first();
        $produk = DB::table('produk')->where('id',$detail->produk_id)->first();
        
        $newStok = $produk->stok + $detail->jumlah;
        DB::table('produk')->where('id',$detail->produk_id)->update([
            'stok' => $newStok,
        ]);

        $pages = 'invoice';
        return redirect()->route('admin.invoice', $id);
    }
}