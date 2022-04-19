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

Route::get('/', function () {
    return view('welcome_silk');
});

Route::get('/generatepassword','App\Http\Controllers\LoginController@generatepassword');
Route::post('/validasilogin','App\Http\Controllers\LoginController@validasiLogin');
Route::get('/dash','App\Http\Controllers\AdminController@index');
Route::get('/logout','App\Http\Controllers\LoginController@logoutSistem');


Route::get('/rekam_medis','App\Http\Controllers\RekamMedisController@index');
Route::get('/rekam_medis/cari','App\Http\Controllers\RekamMedisController@cari');
Route::get('/rekam_medis/laporan','App\Http\Controllers\RekamMedisController@laporan');
Route::get('/rekam_medis/antrian','App\Http\Controllers\RekamMedisController@antrian');
Route::get('/rekam_medis/poli','App\Http\Controllers\RekamMedisController@poli');

Route::get('/dokter','App\Http\Controllers\DokterController@dokterindex');

Route::get('/getdatapasien','App\Http\Controllers\PasienController@getpasien');
Route::get('/pasien','App\Http\Controllers\PasienController@pasienindex');
Route::get('/tambahpasien','App\Http\Controllers\PasienController@tambahpasien');
Route::post('/createpasien','App\Http\Controllers\PasienController@createpasien');
Route::get('/hapuspasien/{id}','App\Http\Controllers\PasienController@hapuspasien');
Route::get('/ubahpasien/{id}','App\Http\Controllers\PasienController@ubahpasien');
Route::post('/editpasien/{id}','App\Http\Controllers\PasienController@editpasien');

Route::get('/dashrawatjalan','App\Http\Controllers\RawatJalanController@dashrawatjalan');

Route::get('/poli_dash','App\Http\Controllers\PoliController@poli_dash')->name('poli_dash');
Route::post('/poli_tambah','App\Http\Controllers\PoliController@poli_tambah')->name('poli_tambah');
Route::get('/poli_edit/{id}','App\Http\Controllers\PoliController@poli_edit')->name('poli_edit');
Route::post('/poli_update/{id}', '\App\Http\Controllers\PoliController@poli_update')->name('poli_update');
Route::get('/poli_delete/{id}', '\App\Http\Controllers\PoliController@poli_delete')->name('poli_delete');

Route::get('/dokter_dash','App\Http\Controllers\DokterController@dokter_dash')->name('dokter_dash');
Route::get('/dokter_tambah','App\Http\Controllers\DokterController@dokter_tambah')->name('dokter_tambah');
Route::get('/dokter_edit','App\Http\Controllers\DokterController@dokter_edit')->name('dokter_edit');
