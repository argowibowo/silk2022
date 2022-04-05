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
