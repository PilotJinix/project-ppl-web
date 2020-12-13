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
}