<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    
    public function index(Request $data){
        $session = $data->session()->get('admin');
        if ($session == null) {
            return redirect()->route("admin.login");
        }
        return view('admin.home');
    }

}