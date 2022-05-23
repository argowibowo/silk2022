<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/getdatapoli','App\Http\Controllers\PoliController@getpoli');
Route::get('/getdatadokter','App\Http\Controllers\DokterController@getdokter');

Route::get('/antrianPendaftaranIndex','App\Http\Controllers\AntrianPendaftaranController@antrianPendaftaranIndex');
Route::get('/getAntrianPendaftaran','App\Http\Controllers\AntrianPendaftaranController@getAntrianPendaftaran');
Route::get('/tambahAntrianPendaftaran','App\Http\Controllers\AntrianPendaftaranController@tambahAntrianPendaftaran');
Route::post('/createAntrianPendaftaran','App\Http\Controllers\DokterController@createAntrianPendaftaran');
Route::get('/hapusAntrianPendaftaran/{id}','App\Http\Controllers\AntrianPendaftaranController@hapusAntrianPendaftaran');

Route::get('/antrianPoliIndex','App\Http\Controllers\AntrianPoliController@antrianPoli');
Route::get('/getAntrianPoli','App\Http\Controllers\AntrianPoliController@getAntrianPoli');
Route::get('/tambahAntrianPoli','App\Http\Controllers\AntrianPoliController@tambahAntrianPoli');
Route::post('/createAntrianPoli','App\Http\Controllers\AntrianPoliController@createAntrianPoli');
Route::get('/hapusAntrianPoli/{id}','App\Http\Controllers\AntrianPoliController@hapusAntrianPoli');

Route::get('/antrianObatIndex','App\Http\Controllers\AntrianObatController@antrianObat');
Route::get('/getAntrianObat','App\Http\Controllers\AntrianObatController@getAntrianObat');
Route::get('/tambahAntrianObat','App\Http\Controllers\AntrianObatController@tambahAntrianObat');
Route::post('/createAntrianObat','App\Http\Controllers\AntrianObatController@createAntrianObat');
Route::get('/hapusAntrianObat/{id}','App\Http\Controllers\AntrianObatController@hapusAntrianObat');
