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
Route::get('/antrianpendaftaran','App\Http\Controllers\AntrianController@antrianpendaftaran');
Route::get('/antrianpoli','App\Http\Controllers\AntrianController@antrianpoli');
Route::get('/antrianobat','App\Http\Controllers\AntrianController@antrianobat');