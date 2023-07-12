<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\akuntansitransaksiController@index');
    Route::get('akuntansitransaksi', 'App\Http\Controllers\akuntansitransaksiController@index');
    
    Route::get('akuntansitransaksi/tambah', 'App\Http\Controllers\akuntansitransaksiController@tambah');
    Route::post('akuntansitransaksi/tambah_proses', 'App\Http\Controllers\akuntansitransaksiController@tambah_proses');
    Route::get('akuntansitransaksi/edit/{id}', 'App\Http\Controllers\akuntansitransaksiController@edit');
    Route::post('akuntansitransaksi/edit_proses', 'App\Http\Controllers\akuntansitransaksiController@edit_proses');
    Route::get('akuntansitransaksi/delete/{id}', 'App\Http\Controllers\akuntansitransaksiController@delete');

    Route::get('tahun', 'App\Http\Controllers\TahunController@index');
    Route::get('tahun/tambah', 'App\Http\Controllers\TahunController@tambah');
    Route::post('tahun/tambah_proses', 'App\Http\Controllers\TahunController@tambah_proses');
    Route::get('tahun/edit/{id}', 'App\Http\Controllers\TahunController@edit');
    Route::post('tahun/edit_proses', 'App\Http\Controllers\TahunController@edit_proses');
    Route::get('tahun/delete/{id}', 'App\Http\Controllers\TahunController@delete');


