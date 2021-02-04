<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::get('/', function () {
    return view('home');
});


Route::prefix('/merk')->group(function ()
{
    Route::get('/', 'MerkController@index')->name('merk.index');
    Route::get('/tambah', 'MerkController@create')->name('merk.tambah');
    Route::post('/tambah', 'MerkController@store')->name('merk.simpan');
    Route::get('/edit/{id}', 'MerkController@edit')->name('merk.edit');
    Route::post('/edit/{id}', 'MerkController@update')->name('merk.update');
    Route::post('/hapus/{id}', 'MerkController@destroy')->name('merk.hapus');
});

Route::prefix('/supplier')->group(function ()
{
    Route::get('/', 'SupplierController@index')->name('supplier.index');
    Route::get('/tambah', 'SupplierController@create')->name('supplier.tambah');
    Route::post('/tambah', 'SupplierController@store')->name('supplier.simpan');
    Route::get('/edit/{id}', 'SupplierController@edit')->name('supplier.edit');
    Route::post('/edit/{id}', 'SupplierController@update')->name('supplier.update');
    Route::post('/hapus/{id}', 'SupplierController@destroy')->name('supplier.hapus');
});

Route::prefix('/figure')->group(function ()
{
    Route::get('/', 'FigureController@index')->name('figure.index');
    Route::get('/tambah', 'FigureController@create')->name('figure.tambah');
    Route::post('/tambah', 'FigureController@store')->name('figure.simpan');
    Route::get('/edit/{id}', 'FigureController@edit')->name('figure.edit');
    Route::post('/edit/{id}', 'FigureController@update')->name('figure.update');
    Route::post('/hapus/{id}', 'FigureController@destroy')->name('figure.hapus');
});

Route::prefix('/penjualan')->group(function ()
{
    Route::get('/', 'PenjualanController@index')->name('penjualan.index');
    Route::get('/tambah', 'PenjualanController@create')->name('penjualan.tambah');
    Route::post('/tambah', 'PenjualanController@store')->name('penjualan.simpan');
    Route::get('/edit/{id}', 'PenjualanController@edit')->name('penjualan.edit');
    Route::post('/edit/{id}', 'PenjualanController@update')->name('penjualan.update');
    Route::post('/hapus/{id}', 'PenjualanController@destroy')->name('penjualan.hapus');
});

Route::prefix('/pembelian')->group(function ()
{
    Route::get('/', 'PembelianController@index')->name('pembelian.index');
    Route::get('/detil', 'PembelianController@detil')->name('pembelian.detil');
    Route::post('/beli', 'PembelianController@store')->name('pembelian.simpan');
    Route::get('/beli/{id}', 'PembelianController@beli')->name('pembelian.beli');
    Route::post('/beli/{id}', 'PembelianController@update')->name('pembelian.update');
});

Route::prefix('/penjualan')->group(function ()
{
    Route::get('/', 'PenjualanController@index')->name('penjualan.index');
    Route::get('/detil', 'PenjualanController@detil')->name('penjualan.detil');
    Route::post('/jual', 'PenjualanController@store')->name('penjualan.simpan');
    Route::get('/jual/{id}', 'PenjualanController@jual')->name('penjualan.jual');
    Route::post('/jual/{id}', 'PenjualanController@update')->name('penjualan.update');
});

