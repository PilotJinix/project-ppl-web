<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
	public function index(){
		return view('home');
	}
	public function productDetail(){
		return view('product-detail');
	}
	public function about(){
		return view('about');
	}
	public function login(){
		return view('auth.login');
	}
	public function register(){
		return view('register');
	}
	public function shop(){
		return view('shop');
	}
}