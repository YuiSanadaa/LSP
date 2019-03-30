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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', 'Auth\AdminController@dashboard');

// ini route informasi
Route::resource('informasi', 'methode\InformasiController');
Route::resource('karyawan', 'methode\KaryawanController');
Route::resource('pajak', 'methode\PpnController');
Route::resource('kategori', 'methode\KategoriController');
Route::resource('unit', 'methode\UnitController');
Route::resource('barang', 'methode\BarangController');		
Route::get('/logout', function () {
    Auth::logout();
});