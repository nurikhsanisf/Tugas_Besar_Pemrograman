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

Route::get('/admin','AdminController@admin');
Route::get('/users','UserController@index');
Route::resource('/tag', 'TagController');
Route::resource('admin/jadwal_dokter', 'Admin\JadwalDokterController');
Route::resource('admin/data_dokter', 'Admin\DokterController');
Route::get('admin/jadwal_dokter', 'Admin\JadwalDokterController@index');
Route::get('admin/data_dokter', 'Admin\DokterController@index');
Route::get('admin/data_dokter/create', 'Admin\DokterController@create')->name('admin.data_dokter.create');
Route::get('admin/data_dokter/{id}/edit', 'Admin\DokterController@edit')->name('admin.data_dokter.edit');
Route::post('admin/data_dokter/store', 'Admin\DokterController@store')->name('admin.data_dokter.store');
Route::delete('admin/data_dokter/{id}/destroy', 'Admin\DokterController@destroy')->name('admin.data_dokter.destroy');
Route::patch('admin/data_dokter/update/{id}', 'Admin\DokterController@update')->name('admin.data_dokter.update');
Route::get('admin/jadwal_dokter/create', 'Admin\JadwalDokterController@create')->name('admin.jadwal_dokter.create');
Route::get('admin/jadwal_dokter/{id}/edit', 'Admin\JadwalDokterController@edit')->name('admin.jadwal_dokter.edit');
Route::post('admin/jadwal_dokter/store', 'Admin\JadwalDokterController@store')->name('admin.jadwal_dokter.store');
Route::delete('admin/jadwal_dokter/{id}/destroy', 'Admin\JadwalDokterController@destroy')->name('admin.jadwal_dokter.destroy');
Route::patch('admin/jadwal_dokter/update/{id}', 'Admin\JadwalDokterController@update')->name('admin.jadwal_dokter.update');
Route::get('/users/jadwal_dokter','User\JadwalDokterController@index');
