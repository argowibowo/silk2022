<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DokterController extends Controller
{
    public function dokterindex()
    {
    	// mengambil data dari table dokter
    	$dokter = DB::table('dokter')->get();
 
    	// mengirim data dokter ke view index
    	return view('dokterindex',['dokter' => $dokter]);
 
    }
}
