<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\DetailCheckOut;
use App\Notifications\Checkout;
use App\User;

class CheckOutController extends Controller
{
    public function checkoutScreen(Request $request, $id){
        $session = $request->session()->get('username');
        if ($session != null) {
            $akun = DB::table('users')->where('username',$session)->first();
            $user_id = $akun->id;

            $detail = DB::table('produk')->where('id',$id)->first();

            $riwayat_pembelian = DB::table('detail_checkout')
                ->join('produk', 'detail_checkout.produk_id','=','produk.id')
                ->where('detail_checkout.user_id','=',$user_id)
                ->select('detail_checkout.*','produk.nama','produk.harga','produk.gambar')->latest()
                ->get();

            return view('checkout',compact('akun','detail','riwayat_pembelian'));
        }

        return redirect()->route('login');
    }

    public function checkout(Request $request, $id){
        $session = $request->session()->get('username');
        $akun = DB::table('users')->where('username',$session)->first();
        $user_id = $akun->id;

        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'no_hp' => 'required|string|max:15|min:9',
            'alamat' => 'required|string|max:255',
            'label_alamat' => 'max:255',
            'kode_pos' => 'required|string|max:100',
            'kota' => 'required|string|max:100',
            'catatan_pembelian' => 'max:255',
            'jumlah' => 'required|string|max:255',
            'biaya_pengiriman' => 'required|string|max:255',
            'diskon' => 'required|string|max:255',
            'metode_pembayaran' => 'required|string|max:255',
            'total_harga' => 'required|string|max:255',
        ]);

        /* Get Time with timezone Asia/Jakarta */
        date_default_timezone_set("Asia/Jakarta");
        $currentTime = time();
        $hours = 1;
        $secondsToAdd = $hours * (60 * 60);

        $newTime = $currentTime + $secondsToAdd;
        $date = date('d F Y H:i', $newTime);

        $link = route('info-payment',$id);
        $user = User::first();
        $user->notify(new Checkout($link, $date));

        $detail = DetailCheckOut::create([
            'nama_penerima' => $request->nama_lengkap,
            'email_penerima' => $request->email,
            'no_hp_penerima' => $request->no_hp,
            'alamat_penerima' => $request->alamat,
            'label_alamat_penerima' => $request->label_alamat,
            'kode_pos_penerima' => $request->kode_pos,
            'kota_penerima' => $request->kota,
            'catatan_pembelian' => $request->catatan_pembelian,
            'user_id' => $user_id,
            'produk_id' => $id,
            'jumlah' => $request->jumlah,
            'metode_pembayaran' => $request->metode_pembayaran,
            'biaya_pengiriman' => $request->biaya_pengiriman,
            'diskon' => $request->diskon,
            'total_harga' => $request->total_harga,
            'batas_pembayaran' => $date,
            'time' => $newTime,
        ]);

        $produk = DB::table('produk')->where('id',$id)->first();

        $newStok = $produk->stok - $request->jumlah;
        DB::table('produk')->where('id',$id)->update([
            'stok' => $newStok,
        ]);

        return redirect()->route('payment',$detail->id);
    }

    public function checkoutDetail(Request $request,$id){
        $session = $request->session()->get('username');
        $akun = DB::table('users')->where('username',$session)->first();
        $user_id = $akun->id;

        $riwayat_pembelian = DB::table('detail_checkout')
            ->join('produk', 'detail_checkout.produk_id','=','produk.id')
            ->where('detail_checkout.user_id','=',$user_id)->select('detail_checkout.*','produk.nama','produk.harga','produk.gambar')->latest()
            ->get();

        $detail = DB::table('produk')
            ->join('detail_checkout', 'detail_checkout.produk_id','=','produk.id')
            ->where('detail_checkout.id','=',$id)
            ->get();

        return view('status-pembelian',compact('akun','riwayat_pembelian','detail'));
    }

    public function payment(Request $request,$id){
        $session = $request->session()->get('username');
        $akun = DB::table('users')->where('username',$session)->first();
        $user_id = $akun->id;

        $riwayat_pembelian = DB::table('detail_checkout')
            ->join('produk', 'detail_checkout.produk_id','=','produk.id')
            ->where('detail_checkout.user_id','=',$user_id)->select('detail_checkout.*','produk.nama','produk.harga','produk.gambar')->latest()
            ->get();

        $detail = DB::table('detail_checkout')->where('id',$id)->first();
        return view('payment',compact('akun','riwayat_pembelian','detail'));
    }

    public function diterima(Request $request, $id){
        DB::table('detail_checkout')->where('id',$id)->update([
            'status_checkout' => 'Diterima'
        ]);

        return redirect()->route('info-payment',$id);
    }

    public function struk(Request $request, $id){
        $request->validate([
            'struk' => 'required|file|image|mimes:jpg,jpeg,gif,png'
        ]);

        $img = $request->file('struk');
        $nama_file = time()."_".$img->getClientOriginalName();

        $tujuan_upload = "assets/images/struk/";

        DB::table('detail_checkout')->where('id',$id)->update([
            'struk' => $nama_file,
            'status_checkout' => 'Menunggu Konfirmasi',
        ]);

        $img->move($tujuan_upload,$nama_file);

        return redirect()->route('info-payment',$id);
    }

}
