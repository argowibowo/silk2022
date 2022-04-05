<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Auth;
use DB;
use Illuminate\Support\Facades\Hash;

class RawatInapController extends Controller
{

    public function getAllRawatInap() {

        $getAlldata = DB::table('rekam_medis')
                        ->join('pasien', 'pasien.id_rm', '=', 'rekam_medis.id_rm')
                        ->join('dokter', 'dokter.id_dokter', '=', 'rekam_medis.id_dokter')
                        ->get();

        return view('views_poli.poli_dashboard')->with('data', $getAlldata);
    }

}
