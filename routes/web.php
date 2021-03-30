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
Route::get('/admin/dashboard', function () {
    return view('admin.index');
});
Route::get('/', function () {
    return view('home.index');
});
Route::get('/siswa', function () {
    return view('siswa.index');
});
Route::get('/laporansiswa', function () {
    return view('laporansiswa.index');
});

// DataSiswa
Route::get('/admin/siswa' , 'SiswaController@index')->name('siswa');
Route::post('/simpan' , 'SiswaController@store')->name('simpan');
Route::get('/admin/siswa-edit/{id}' , 'SiswaController@edit')->name('edit');
Route::post('/update/{id}' , 'SiswaController@update')->name('update');
Route::get('/delete/{id}' , 'SiswaController@destroy')->name('delete');

Route::get('/laporansiswa/{id}' , 'LaporansiswaController@index')->name('laporansiswa');


