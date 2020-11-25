<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'UserController@index')->name('home');
Route::get('product/{id}', 'UserController@productDetail')->name('product');
Route::get('about', 'UserController@about');
Route::get('shop', 'UserController@shop');
Route::get('account', 'UserController@my_account')->name('profile-user');

Route::get('register', 'Auth\RegisterController@register')->name('register');
Route::post('create', 'Auth\RegisterController@store')->name('create');

Route::get('login', 'Auth\LoginController@login')->name('login');
Route::post('login', 'Auth\LoginController@authenticate');
Route::get('dashboard', 'Auth\LoginController@home')->name('dashboard');
Route::get('bye/logout', 'Auth\LoginController@logout')->name('logout');
Route::get('edit-profile', 'Auth\EditProfileController@editProfile')->name('edit-profile');
Route::post('edit-user', 'Auth\EditProfileController@editUser')->name('edit-user');

Route::get('upgrade-mitra', 'Auth\UpgradeMitraController@upgradeMitra')->name('upgrade-mitra');
Route::post('ajuan-saya', 'Auth\UpgradeMitraController@createMitra')->name('create-mitra');

Route::get('product/checkout/{id}', 'CheckOutController@checkoutScreen')->name('checkout-screen');
Route::post('product/checkout/wgfarm{id}','CheckOutController@checkout')->name('checkout');
Route::get('payment/thankyou/wgfarm/{id}','CheckOutController@payment')->name('payment');
Route::get('payment/infopayment/{id}', 'CheckOutController@checkoutDetail')->name('info-payment');
Route::get('payment/status/{id}', 'CheckOutController@diterima')->name('update-status-diterima');

Route::post('review/wgfarm/thankyou/{id}', 'ReviewProductController@review')->name('review');

Route::get('wgfarm/mitra/ajuan-produk', 'AjuanProdukController@index')->name('ajuan-produk');