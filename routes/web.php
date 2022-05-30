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
Route::get('/rekam_medis/tambah','App\Http\Controllers\RekamMedisController@tambah');
Route::post('/rekam_medis/simpan','App\Http\Controllers\RekamMedisController@simpan');
Route::get('/hapus_rm/{id}','App\Http\Controllers\RekamMedisController@hapus');
Route::get('/rekam_medis/cari','App\Http\Controllers\RekamMedisController@cari');


Route::get('/getdatapasien','App\Http\Controllers\PasienController@getpasien');
Route::get('/pasienindex','App\Http\Controllers\PasienController@pasienindex');
Route::get('/tambahpasien','App\Http\Controllers\PasienController@tambahpasien');
Route::post('/createpasien','App\Http\Controllers\PasienController@createpasien');
Route::get('/hapuspasien/{id}','App\Http\Controllers\PasienController@hapuspasien');
Route::get('/ubahpasien/{id}','App\Http\Controllers\PasienController@ubahpasien');
Route::post('/editpasien/{id}','App\Http\Controllers\PasienController@editpasien');

Route::get('/dashrawatjalan','App\Http\Controllers\RawatJalanController@dashrawatjalan');
Route::get('/tambahrawatjalan','App\Http\Controllers\RawatJalanController@addPasienRawatJalan');

Route::get('/getdatapoli','App\Http\Controllers\PoliController@getpoli');
Route::get('/poli_dash','App\Http\Controllers\PoliController@poli_dash')->name('poli_dash');
Route::get('/poli_tambah','App\Http\Controllers\PoliController@poli_tambah')->name('poli_tambah');
Route::post('/createpoli','App\Http\Controllers\PoliController@createpoli')->name('createpoli)');
Route::get('/poli_edit/{id}','App\Http\Controllers\PoliController@poli_edit')->name('poli_edit');
Route::post('/poli_update/{id}', '\App\Http\Controllers\PoliController@poli_update')->name('poli_update');
Route::get('/poli_delete/{id}', '\App\Http\Controllers\PoliController@poli_delete')->name('poli_delete');


Route::get('/dokterindex','App\Http\Controllers\DokterController@dokterindex')->name('dokterindex');;
Route::post('/createdokter','App\Http\Controllers\DokterController@createdokter')->name('createdokter');;
Route::get('/dokter_dash','App\Http\Controllers\DokterController@dokter_dash')->name('dokter_dash');
Route::get('/dokter_tambah','App\Http\Controllers\DokterController@dokter_tambah')->name('dokter_tambah');
Route::get('/dokter_edit/{id}','App\Http\Controllers\DokterController@dokter_edit')->name('dokter_edit');
Route::post('/dokter_update/{id}', '\App\Http\Controllers\DokterController@dokter_update')->name('dokter_update');
Route::get('/dokter_delete/{id}','App\Http\Controllers\DokterController@dokter_delete')->name('dokter_delete');


Route::get('/checkup','App\Http\Controllers\PasienController@getAllCheckup');
Route::get('/dashcheckup','App\Http\Controllers\PoliController@dashcheckup');
Route::post('/createcheckup','App\Http\Controllers\PasienController@createcheckup');
Route::get('/checkup_tambah','App\Http\Controllers\PasienController@checkup_tambah');
Route::post('/checkup_update/{id}','App\Http\Controllers\PasienController@checkup_update');
Route::get('/checkup_edit/{id}','App\Http\Controllers\PasienController@checkup_edit');
Route::get('/checkup_hapus/{id}','App\Http\Controllers\PasienController@checkup_hapus');
Route::get('/autocomplete', '\App\Http\Controllers\PasienController@autocomplete')->name('autocomplete');

Route::get('/obatindex','App\Http\Controllers\ObatController@obatindex');
Route::get('/getObat','App\Http\Controllers\ObatController@getObat');
Route::post('/createobat','App\Http\Controllers\ObatController@createobat');
Route::get('/obat_tambah','App\Http\Controllers\ObatController@obat_tambah');
Route::post('/obat_edit/{id}','App\Http\Controllers\ObatController@obat_edit');
Route::get('/hapusObat/{id}','App\Http\Controllers\ObatController@hapusObat');

Route::get('/transaksiObat/{id}','App\Http\Controllers\TransaksiObatController@TransaksiObat');

