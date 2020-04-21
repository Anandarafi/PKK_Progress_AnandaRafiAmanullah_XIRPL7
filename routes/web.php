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

/*CONTRUCT */
Route::group(['middleware'=>'cek_login'],function(){
        Route::get('/welcome','PageController@index');
        Route::get('/home','PageController@index1'); 

    Route::get('/event','EventController@index');
    Route::get('/event/edit/{id}', "EventController@edit");
    Route::post('/event/update', "EventController@update") ->name('event.update');
    Route::get('/create_event','EventController@create');
    Route::get('/event/create','EventController@create');
    Route::post('/event/store','EventController@store') ->name('event.store');
    Route::get('/event/hapus/{id}', "EventController@hapus");
    Route::get('/event/detail/{id}', "EventController@detail");
    
    Route::get('/transaksi','TransaksiController@index');
    Route::get('/transaksi/edit/{id}', "TransaksiController@edit");
    Route::post('/transaksi/update', "TransaksiController@update") ->name('transaksi.update');
    Route::get('/tambah_transaksi','TransaksiController@create');
    Route::get('/transaksi/create','TransaksiController@create');
    Route::post('/transaksi/store','TransaksiController@store') ->name('transaksi.store');
    Route::get('/transaksi/hapus/{id}', "TransaksiController@hapus");
    Route::get('/laporan',"PeminjamanController@cetak_pdf");

    Route::get('/create_transaksi1','PageController@create1');
    Route::get('/transaksi/create','PageController@create1');
    Route::post('/transaksi/store','PageController@store1') ->name('transaksi.store1');

});
Route::get('login','LoginController@index');
Route::get('welcome','LoginController@index1');
Route::get('home','LoginController@index2');
Route::post('login/cek','LoginController@cek');
Route::get('/register','LoginController@create');
Route::get('/login/create','LoginController@create');
Route::post('/login/store','LoginController@store') ->name('login.store');
Route::get('/logout','LoginController@logout');

Route::get('/create_transaksi','LoginController@create1');
Route::get('/transaksi/create','LoginController@create1');
Route::post('/transaksi/store','LoginController@store1') ->name('transaksi.store1');







