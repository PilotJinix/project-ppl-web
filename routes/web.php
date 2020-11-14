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
Route::get('product', 'UserController@productDetail');
Route::get('about', 'UserController@about');
Route::get('shop', 'UserController@shop');
Route::get('account', 'UserController@my_account')->name('account');

Route::get('register', 'Auth\RegisterController@register')->name('register');
Route::post('create', 'Auth\RegisterController@store')->name('create');

Route::get('login', 'Auth\LoginController@login')->name('login');
Route::post('login', 'Auth\LoginController@authenticate');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('edit-profile', 'Auth\EditProfileController@editProfile')->name('edit-profile');
Route::post('edit-profile', 'Auth\EditProfileController@edit')->name('edit-user');

Route::get('home', 'Auth\LoginController@home');
Route::get('upgrade-mitra', 'Auth\UpgradeMitraController@upgradeMitra')->name('upgrade-mitra');
Route::post('ajuan-saya', 'Auth\UpgradeMitraController@createMitra')->name('create-mitra');