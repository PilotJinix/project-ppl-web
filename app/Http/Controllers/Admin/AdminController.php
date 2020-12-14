<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class AdminController extends Controller
{
    
    public function index(Request $data){
        $pages = 'dashboard';
        $session = $data->session()->get('admin');
        if ($session == null) {
            return redirect()->route("admin.login");
        }
        return view('admin.home', compact('pages'));
    }

    public function daftarPengguna(Request $request, $pages){
        $session = $request->session()->get('admin');
        if ($session == null) {
            return redirect()->route("admin.login");
        }

        $pengguna = DB::table('users')->latest()->get();
        return view('admin.daftarPengguna', compact('pages','pengguna'));
    }
    
    public function pengajuanMitra(Request $request){
        $session = $request->session()->get('admin');
        if ($session == null) {
            return redirect()->route("admin.login");
        }
        $pages = "pengajuan-mitra";

        $proses = DB::table('ajuan_user')->where('status','proses')->latest()->get();
        return view('admin.pengajuanmitra',compact('pages','proses'));
    }

    public function terimaMitra(Request $request, $id){
        $session = $request->session()->get('admin');
        if ($session == null) {
            return redirect()->route("admin.login");
        }

        $ajuan = DB::table('ajuan_user')->where('user_id',$id)->first();

        /** Update Data on Table Users **/
        DB::table('users')->where('id',$id)->update([
            'foto_ktp' => $ajuan->ktp,
            'nik' => $ajuan->nik,
            'no_rekening' => $ajuan->no_rekening,
            'status' => 'mitra',
        ]);

        /** Delete data on table ajuan_user **/
        DB::table('ajuan_user')->where('user_id',$id)->delete();

        return redirect()->route('admin.pengajuan-mitra');
    }

    public function tolakMitra(Request $request, $id){
        $session = $request->session()->get('admin');
        if ($session == null) {
            return redirect()->route("admin.login");
        }

        $ajuan = DB::table('ajuan_user')->where('user_id',$id)->first();

        /** Update Data on Table Users **/
        DB::table('users')->where('id',$id)->update([
            'status' => 'user',
        ]);

        /** Delete data on table ajuan_user **/
        DB::table('ajuan_user')->where('user_id',$id)->delete();

        return redirect()->route('admin.pengajuan-mitra');
    }

    public function deletePengguna(Request $request,$id){
        $session = $request->session()->get('admin');
        if ($session == null) {
            return redirect()->route("admin.login");
        }

        DB::table('users')->where('id',$id)->delete();

        return redirect()->route('admin.pengguna','daftar-pengguna')->with('deleted','Akun berhasil dihapus');
    }

    public function deleteMitra(Request $request, $id){
        $session = $request->session()->get('admin');
        if ($session == null) {
            return redirect()->route("admin.login");
        }

        DB::table('users')->where('id',$id)->update([
            'status' => 'user',
            'foto_ktp' => null,
            'nik' => null,
            'no_rekening' => null,
        ]);

        redirect()->route('admin.pengguna','daftar-pengguna')->with('dropped','Akun Telah menjadi user');
    }
}