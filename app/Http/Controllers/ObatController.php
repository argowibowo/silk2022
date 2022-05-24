<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class ObatController extends Controller
{
    public function ObatIndex()
    {
    	// mengambil data dari table obat
    	$obat = DB::table('obat')->get();
 
    	// mengirim data obat ke view index
    	return view('ObatIndex',['obat' => $obat]);

    }

	public function getObat()
    {
    	// mengambil data dari table obat
    	$obat = DB::table('obat')->get();
 
    	// mengirim data obat ke view index
    	if($obat){
            return response()->json(["Result"=>
                    ["ResultCode"=> 1,
                    "ResultMessage"=>"Success get data obat" ],
                    "DataUser"=>$obat
                ], 200
            );
    	}
	}

    public function tambahObat()
    {
    	$obat = DB::table('obat')->get();

    	return view('tambahObat',['obat' => $obat]);

    }

	public function createObat(Request $request)
	{
		DB::table('obat')->insert([
			'id_obat' => $request->id_obat,
			'nama' => $request->nama,
            'kode_obat' => $request->kode_obat,
            'jenis_obat' => $request->jenis_obat,
		]);
		return redirect('/ObatIndex');
	}

}