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
/*
(------------------->>> Route Untuk User dan Mitra <<<-----------------------)
*/

Route::get('/', 'UserController@index')->name('home');
Route::get('product/{id}', 'UserController@productDetail')->name('product');
Route::get('about', 'UserController@about');
Route::get('shop', 'UserController@shop');
Route::get('account', 'UserController@my_account')->name('profile-user');
Route::get('wgfarm/blog','UserController@blog')->name('blog');
Route::get('wgfarm/blog/{id}','UserController@blogDetail')->name('blog-detail');

Route::get('register', 'Auth\RegisterController@register')->name('register');
Route::post('create', 'Auth\RegisterController@store')->name('create');

Route::get('login', 'Auth\LoginController@login')->name('login');
Route::post('login', 'Auth\LoginController@authenticate');
Route::get('dashboard', 'Auth\LoginController@home')->name('dashboard');
Route::get('bye/logout', 'Auth\LoginController@logout')->name('logout');
Route::get('edit-profile', 'Auth\EditProfileController@editProfile')->name('edit-profile');
Route::post('edit-user', 'Auth\EditProfileController@editUser')->name('edit-user');
Route::post('edit-password', 'Auth\EditProfileController@editPassword')->name('edit-password');
Route::post('edit-foto-profile', 'Auth\EditProfileController@editFoto')->name('edit-foto');

Route::get('upgrade-mitra', 'Auth\UpgradeMitraController@upgradeMitra')->name('upgrade-mitra');
Route::post('ajuan-saya', 'Auth\UpgradeMitraController@createMitra')->name('create-mitra');
Route::get('wgfarm/mitra/getout/{id}','Auth\UpgradeMitraController@mundurMitra')->name('mundur-mitra');

Route::get('product/checkout/{id}', 'CheckOutController@checkoutScreen')->name('checkout-screen');
Route::post('product/checkout/wgfarm{id}','CheckOutController@checkout')->name('checkout');
Route::get('payment/thankyou/wgfarm/{id}','CheckOutController@payment')->name('payment');
Route::get('payment/infopayment/{id}', 'CheckOutController@checkoutDetail')->name('info-payment');
Route::get('payment/status/{id}', 'CheckOutController@diterima')->name('update-status-diterima');
Route::post('payment/unggah-struk/{id}','CheckOutController@struk')->name('unggah-struk');

Route::post('review/wgfarm/thankyou/{id}/{idDetail}', 'ReviewProductController@review')->name('review');

Route::get('wgfarm/mitra/ajuan-produk', 'AjuanProdukController@index')->name('ajuan-produk');
Route::post('wgfarm/mitra/ajukan-produk', 'AjuanProdukController@tambah')->name('ajukan-produk');
Route::get('wgfarm/mitra/riwayat-produk','AjuanProdukController@riwayat')->name('riwayat-ajuan-mitra');

Route::get('admin',function(){
  return redirect()->route('admin.dashboard');
});


/* 
  |-----------------------------------------------------------------------|
  |------------------------>> Route Untuk Admin <<------------------------|
  |-----------------------------------------------------------------------|
*/

Route::prefix('/admin')->name('admin.')->namespace('Admin')->group(function(){
  Route::get('dashboard','AdminController@index')->name('dashboard');
  Route::get('login','Auth\LoginController@index')->name('login');

  Route::post('authenticated', 'Auth\LoginController@authenticate')->name('logged');
  Route::get('logout','Auth\LoginController@logout')->name('logout');

  Route::get('pengguna/{pages}','AdminController@daftarPengguna')->name('pengguna');
  Route::get('pengguna/akun/delete/{id}','AdminController@deletePengguna')->name('delete-pengguna');
  Route::get('pengguna/akun/drop/{id}','AdminController@deleteMitra')->name('drop-mitra');
  Route::get('pengguna/mitra/pengajuan-mitra','AdminController@pengajuanMitra')->name('pengajuan-mitra');
  Route::get('pengguna/mitra/terima/{id}','AdminController@terimaMitra')->name('terima-mitra');
  Route::get('pengguna/mitra/tolak/{id}','AdminController@tolakMitra')->name('tolak-mitra');

  Route::get('produk/{pages}','ProdukController@listProduk')->name('list-produk');
  Route::get('new-produk','ProdukController@newProduk')->name('new-produk');
  Route::post('new-produk/save','ProdukController@saveProduk')->name('save-produk');
  Route::get('edit-produk/{id}','ProdukController@editProduk')->name('edit-produk');
  Route::post('edit-produk/change/{id}','ProdukController@saveEdit')->name('save-edit-produk');
  Route::get('delete-produk/{id}','ProdukController@deleteProduk')->name('delete-produk');
  
  Route::get('produk/mitra/penawaran-produk','ProdukController@penawaranProduk')->name('penawaran-produk');
  Route::get('produk/mitra/detail-produk-penawaran/{id}','ProdukController@detailPenawaran')->name('detail-penawaran');
  Route::get('produk/mitra/terima-penawaran/{id}','ProdukController@terimaPenawaran')->name('terima-penawaran');
  Route::get('produk/mitra/tolak-penawaran/{id}','ProdukController@tolakPenawaran')->name('tolak-penawaran');
  Route::get('produk/mitra/selesai-checking/{id}','ProdukController@selesaiCheck')->name('selesai-check');
  Route::get('produk/mitra/batalkan-penawaran/{id}','ProdukController@batalkanPenawaran')->name('batalkan-penawaran');

  Route::get('produk/list/patokan-harga','ProdukController@patokanHarga')->name('patokan-harga');
  Route::get('produk/new/patokan-harga','ProdukController@newHarga')->name('new-harga');
  Route::post('produk/patokan-harga/edit/{id}','ProdukController@editHarga')->name('edit-harga');
  Route::post('produk/new/patokan-harga/saved','ProdukController@saveHarga')->name('save-harga');
  Route::get('produk/patokan-harga/delete/{id}','ProdukController@deleteHarga')->name('delete-harga');

  Route::get('riwayat-transaksi','TransaksiController@index')->name('riwayat-transaksi');
  Route::get('riwayat-transaksi/invoice/{id}','TransaksiController@invoice')->name('invoice');
  Route::get('riwayat-transaksi/payment/terima/{id}','TransaksiController@terimaPembayaran')->name('terima-pembayaran');
  Route::get('riwayat-transaksi/payment/tolak/{id}','TransaksiController@tolakPembayaran')->name('tolak-pembayaran');
  Route::post('riwayat-transaksi/resi/{id}','TransaksiController@resi')->name('masukkan-resi');

  Route::get('blog/artikel','BlogController@index')->name('artikel');
  Route::get('blog/artikel/new','BlogController@newArtikel')->name('new-artikel');
  Route::post('blog/artikel/new/save','BlogController@savedNew')->name('save-artikel');
  Route::get('blog/artikel/edit/{id}','BlogController@editArtikel')->name('edit-artikel');
  Route::post('blog/artikel/save-edit/{id}','BlogController@saveEdit')->name('save-edit-artikel');
  Route::get('blog/artikel/delete-artikel/{id}','BlogController@deleteArtikel')->name('delete-artikel');
});