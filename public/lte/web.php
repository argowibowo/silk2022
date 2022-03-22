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

//Route::get('kpsi/public/admin','AdminController@index');

//untuk mhs
Route::get('kpsi/public/mhs','MhsController@index')->middleware('cekmhs');
Route::get('kpsi/public/mhs/suratketerangan','MhsController@suratketerangan')->middleware('cekmhs');
Route::post('kpsi/public/mhs/suratketeranganpost','MhsController@suratketeranganpost');
Route::get('kpsi/public/mhs/prakp','MhsController@praKp')->middleware('cekmhs');
Route::post('kpsi/public/mhs/prakppost','MhsController@praKpPost');
Route::get('kpsi/public/mhs/kp','MhsController@kp')->middleware('cekmhs');
Route::post('kpsi/public/mhs/kppost','MhsController@kpPost');
Route::post('kpsi/public/mhs/kpupdate','MhsController@kpUpdate');

//untuk dosen
Route::get('kpsi/public/dosen','DosenController@index')->middleware('cekdosen');
Route::get('kpsi/public/adm/suratketerangan','DosenController@suratKeterangan')->middleware('cekdosen');
Route::post('kpsi/public/dosesn/suratketeranganpost','DosenController@suratKeteranganPost');
Route::get('kpsi/public/dosen/suratketerangan/{idSurat}/{keputusan}','DosenController@suratKeteranganVerif')->middleware('cekdosen');
Route::get('kpsi/public/adm/kpprakp','DosenController@kpPraKp')->middleware('cekdosen');
Route::get('kpsi/public/adm/daftarregis','DosenController@daftarRegistrasi')->middleware('cekdosen');
Route::post('kpsi/public/dosen/prakpverif','DosenController@praKpVerif');
Route::post('kpsi/public/dosen/kpverif','DosenController@kpVerif');
Route::get('kpsi/public/adm/ujiankp','DosenController@ujianKp')->middleware('cekdosen');
Route::get('kpsi/public/dosen/listujiankp','DosenController@listUjianKp')->middleware('cekdosen');
Route::post('kpsi/public/dosen/updateujiankp','DosenController@updateUjianKp');
Route::post('kpsi/public/dosen/ajukanujiankp','DosenController@ajukanUjianKp');
Route::get('kpsi/public/adm/periodekp','DosenController@periodeKp')->middleware('cekdosen');
Route::post('kpsi/public/dosen/updateperiodekp','DosenController@updatePeriodeKp');
Route::post('kpsi/public/dosen/periodekppost','DosenController@periodeKpPost');

//login google
Route::get('kpsi/public/google', function () {
    return view('googleAuth');
});
    
Route::get('kpsi/public/auth/google', 'Auth\LoginController@redirectToGoogle');
Route::get('kpsi/public/auth/googlelogout', 'MhsController@logOutGoogle');
Route::get('kpsi/public/auth/google/callback', 'Auth\LoginController@handleGoogleCallback');