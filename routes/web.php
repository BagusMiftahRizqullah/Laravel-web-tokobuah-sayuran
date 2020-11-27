<?php

use Illuminate\Support\Facades\Route;

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

// HALAMAN HOME
Route::get('/', 'App\Http\Controllers\HomeController@index'); //Halaman Home
Route::get('/about', 'App\Http\Controllers\AboutController@index'); //Halaman Home
Route::get('/shop', 'App\Http\Controllers\ShopController@index'); //Halaman Home
Route::get('/shopdetail', 'App\Http\Controllers\ShopdetailController@index'); //Halaman Home



//ADMIN

Route::get('/admin-register', 'App\Http\Controllers\AuthController@getRegister')->name('registeradmin')->middleware('guest'); //register 
Route::post('/admin-register', 'App\Http\Controllers\AuthController@postRegister')->middleware('guest');
Route::get('/admin-login', 'App\Http\Controllers\AuthController@getLogin')->middleware('guest')->name('loginadmin');//login 
Route::post('/admin-login', 'App\Http\Controllers\AuthController@postLogin')->middleware('guest'); 
Route::get('/admin-logout', 'App\Http\Controllers\AuthController@logout')->middleware('auth')->name('logoutadmin'); //register  
Route::get('/admin', 'App\Http\Controllers\AdminController@index')->middleware('auth')->name('admin');  //Halman Index Admin
                               
//Admin Tambah Barang
Route::get('/barang', 'App\Http\Controllers\BarangController@index')->middleware('auth'); //Halaman Barang Admin
Route::get('/barang/tambah', 'App\Http\Controllers\BarangController@create')->middleware('auth'); //Halaman Tambah Barang Admin
Route::post('/barang/tambah', 'App\Http\Controllers\BarangController@store')->middleware('auth');
Route::get('/barang/hapus/{id}', 'App\Http\Controllers\BarangController@hapus')->middleware('auth');  //hapus
Route::get('/barang/edit/{id}', 'App\Http\Controllers\BarangController@edit')->middleware('auth');  //edit
Route::put('/barang/update/{id}', 'App\Http\Controllers\BarangController@update')->middleware('auth');  //UPDATE

//Halaman page HOME Admin
Route::get('/pagehome', 'App\Http\Controllers\PagehomeController@index')->middleware('auth'); //Halaman page HOME Admin

//Admin Page Ganti Logo
Route::get('/logo/edit/{id}', 'App\Http\Controllers\LogoController@edit')->middleware('auth');  //Halaman Edit Logo Admin
Route::put('/logo/update/{id}', 'App\Http\Controllers\LogoController@update')->middleware('auth');  //UPDATE LOGO

//Admin Page Ganti Img Home
Route::get('/homeimg', 'App\Http\Controllers\HomeimgController@index')->middleware('auth'); //Halaman page HOME Slider 
Route::get('/homeimg/edit/{id}', 'App\Http\Controllers\HomeimgController@edit')->middleware('auth');  //Halaman Edit Img Home
Route::put('/homeimg/update/{id}', 'App\Http\Controllers\HomeimgController@update')->middleware('auth');  //UPDATE Img home

// Admin Page Atur Slider
Route::get('/homeslider', 'App\Http\Controllers\SliderhomeController@index')->middleware('auth'); //Halaman page HOME Slider 
Route::get('/homeslider/tambah', 'App\Http\Controllers\SliderhomeController@create')->middleware('auth'); //Halaman Tambah Slider Home Admin
Route::post('/homeslider/tambah', 'App\Http\Controllers\SliderhomeController@store')->middleware('auth');
Route::get('/homeslider/hapus/{id}', 'App\Http\Controllers\SliderhomeController@hapus')->middleware('auth');  //hapus
Route::get('/homeslider/edit/{id}', 'App\Http\Controllers\SliderhomeController@edit')->middleware('auth');  //edit
Route::put('/homeslider/update/{id}', 'App\Http\Controllers\SliderhomeController@update')->middleware('auth');  //UPDATE

// Admin Page Atur Slider
Route::get('/homepromo', 'App\Http\Controllers\HomepromoController@index')->middleware('auth'); //Halaman page HOME Promo 
Route::get('/homepromo/tambah', 'App\Http\Controllers\HomepromoController@create')->middleware('auth'); //Halaman Tambah Slider Home Promo
Route::post('/homepromo/tambah', 'App\Http\Controllers\HomepromoController@store')->middleware('auth');
Route::get('/homepromo/hapus/{id}', 'App\Http\Controllers\HomepromoController@hapus')->middleware('auth');  //hapus
Route::get('/homepromo/edit/{id}', 'App\Http\Controllers\HomepromoController@edit')->middleware('auth');  //edit
Route::put('/homepromo/update/{id}', 'App\Http\Controllers\HomepromoController@update')->middleware('auth');  //UPDATE