<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class RawatJalanController extends Controller
{
    public function dashrawatjalan()
    {
    	// mengambil data dari api pasien
    	$data_pasien = Http::get('http://localhost/silk2022/public/getdatapasien')->json();
        //dd($data_pasien);

    	// mengirim data pasien ke view index
    	return view('views_RawatJalan.rawatJalan_dash', compact('data_pasien'));

    }

    public function addPasienRawatJalan()
    {
    	$pasien = DB::table('pasien')->get();

    	return view('views_RawatJalan.rawatjalan_form',['pasien' => $pasien]);

    }

}
