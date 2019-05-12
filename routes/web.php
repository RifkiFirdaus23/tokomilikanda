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

Route::get('/', function () {
    $barang = DB::table('barang')->get();
    $keranjang = DB::table('keranjang')->get();
    $transaksi = DB::table('transaksi')->get();
    $id_order = DB::table('transaksi')->select('id_order')->count();
    $id_o = $id_order+1;

    return view('index',['barang' =>$barang, 'transaksi'=>$transaksi ]);

  });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/barang', 'BarangController@index');

Route::get('/admin', 'AdminController@admin');

Route::post('/public//admin/proses', 'AdminController@proses');

Route::get('/admin/edit/{id}', 'AdminController@edit');

Route::get('/admin/hapus/{id}', 'AdminController@hapus');

Route::post('/admin/update', 'AdminController@update');

Route::post('/keranjang', 'BarangController@keranjang');

Route::post('/order', 'BarangController@order');

Route::post('/checkout', 'BarangController@checkout');

Route::get('/detail', 'DetailController@detail');
