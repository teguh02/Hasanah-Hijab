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
    return redirect() -> route('beranda.index');
});

Route::get('/pemesanan/105691E8282232A4645226404D9Z82/berhasil', function () {
    return view('pesan.berhasil');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('beranda', 'BerandaController');
Route::resource('barang', 'BarangController');
Route::resource('Cari', 'CariController');
Route::resource('kategori', 'KategoriController');
Route::resource('Form-Pemesanan', 'HandelController');
Route::resource('Pesan', 'PesanController');
Route::resource('teguh-rijanandi', 'profil');
Route::resource('Bantuan', 'BantuanController');
Route::resource('Invoice', 'CariInvoice');
Route::resource('inbox', 'Inboxs');
Route::resource('loading', 'loadingController');