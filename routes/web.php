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

Route::get('/pegawai', 'PegawaiController@index');
Route::get('/pegawai/tambah', 'PegawaiController@tambah');
Route::post('/pegawai/store', 'PegawaiController@store');
Route::get('/pegawai/edit/{id}', 'PegawaiController@edit');
Route::post('/pegawai/update', 'PegawaiController@update');
Route::get('/pegawai/hapus/{id}', 'PegawaiController@hapus');

Route::get('/jurusan', 'JurusanController@index');
Route::get('/jurusan/tambah', 'JurusanController@tambah');
Route::post('/jurusan/simpan', 'JurusanController@simpan');
Route::get('/jurusan/edit/{id}', 'JurusanController@edit');
Route::post('/jurusan/update', 'JurusanController@update');
Route::get('/jurusan/hapus/{id}', 'JurusanController@hapus');
