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

Route::get('antrianPoliIndex','App\Http\Controllers\AntrianPoliController@antrianPoliIndex')->name('antrianPoliIndex');
Route::get('antrianPoliIndex/tambahAntrianPoli','App\Http\Controllers\AntrianPoliController@tambahAntrianPoli')->name('tambahAntrianPoli');
Route::post('antrianPoliIndex/tambahAntrianPoli/proses','App\Http\Controllers\AntrianPoliController@createAntrianPoli')->name('createAntrianPoli');
Route::get('antrianPoliIndex/tambahAntrianPoli/edit/{id_antrian_poli}','App\Http\Controllers\AntrianPoliController@editAntrianPoli')->name('editAntrianPoli');
Route::post('antrianPoliIndex/tambahAntrianPoli/edit/proses/{id_antrian_poli}','App\Http\Controllers\AntrianPoliController@proseseditAntrianPoli')->name('proseseditAntrianPoli');
Route::get('antrianPoliIndex/tambahAntrianPoli/hapus/{id_antrian_poli}','App\Http\Controllers\AntrianPoliController@hapusAntrianPoli')->name('hapusAntrianPoli');

Route::get('antrianObatIndex','App\Http\Controllers\AntrianObatController@antrianObatIndex')->name('antrianObatIndex');
Route::get('antrianObatIndex/tambahAntrianObat','App\Http\Controllers\AntrianObatController@tambahAntrianObat')->name('tambahAntrianObat');
Route::post('antrianObatIndex/tambahAntrianObat/proses','App\Http\Controllers\AntrianObatController@createAntrianObat')->name('createAntrianObat');
Route::get('antrianObatIndex/tambahAntrianObat/edit/{id_antrian_poli}','App\Http\Controllers\AntrianObatController@editAntrianObat')->name('editAntrianObat');
Route::post('antrianObatIndex/tambahAntrianObat/edit/proses/{id_antrian_poli}','App\Http\Controllers\AntrianObatController@proseseditAntrianObat')->name('proseseditAntrianObat');
Route::get('antrianObatIndex/tambahAntrianObat/hapus/{id_antrian_poli}','App\Http\Controllers\AntrianObatController@hapusAntrianObat')->name('hapusAntrianObat');

Route::get('antrianRawatJalanIndex','App\Http\Controllers\AntrianRawatJalanController@antrianRawatJalanIndex')->name('antrianRawatJalanIndex');
Route::get('antrianRawatJalanIndex/tambahAntrianRawatJalan','App\Http\Controllers\AntrianRawatJalanController@tambahAntrianRawatJalan')->name('tambahAntrianRawatJalan');
Route::post('antrianRawatJalanIndex/tambahAntrianRawatJalan/proses','App\Http\Controllers\AntrianRawatJalanController@createAntrianRawatJalan')->name('createAntrianRawatJalan');
Route::get('antrianRawatJalanIndex/tambahAntrianRawatJalan/edit/{id_antrian_poli}','App\Http\Controllers\AntrianRawatJalanController@editAntrianRawatJalan')->name('editAntrianRawatJalan');
Route::post('antrianRawatJalanIndex/tambahAntrianRawatJalan/edit/proses/{id_antrian_poli}','App\Http\Controllers\AntrianRawatJalanController@proseseditAntrianRawatJalan')->name('proseseditAntrianRawatJalan');
Route::get('antrianRawatJalanIndex/tambahAntrianRawatJalan/hapus/{id_antrian_poli}','App\Http\Controllers\AntrianRawatJalanController@hapusAntrianRawatJalan')->name('hapusAntrianRawatJalan');

