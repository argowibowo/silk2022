<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class AntrianObatController extends Controller
{
    public function antrianObatIndex()
    {
    	// mengambil data dari table antrian_obat
    	$antrian_pendaftaran = DB::table('antrian_obat')->get();
 
    	// mengirim data antrian_obat ke view index
    	return view('view_antrian_poli/antrianObatIndex',['antrian_obat' => $antrian_obat]);

    }

	public function getpAntrianObat()
    {
    	// mengambil data dari table antrian_obat
    	$antrian_obat = DB::table('antrian_obat')->get();
 
    	// mengirim data antrian_obat ke view index
    	if($antrian_obat){
            return response()->json(["Result"=>
                    ["ResultCode"=> 1,
                    "ResultMessage"=>"Success get data antrian obat" ],
                    "DataUser"=>$antrian_obat
                ], 200
            );
    	}
	}

    public function tambahAntrianObat()
    {
    	$antrian_obat = DB::table('antrian_obat')->get();

    	return view('vie_antrian_obat/tambahAntrianObat',['antrian_obat' => $antrian_obat]);

    }

	public function createAntrianObat(Request $request)
	{
		DB::table('antrian_obat')->insert([
			'id_antrian_obat' => $request->id_antrian_obat,
			'tanggal' => $request->tanggal,
		]);
		return redirect('/antrianObatIndex');
	}

	public function hapusAntrianObat($id)
	{
		DB::table('antrian_obat')->where('id_antrian_obat',$id)->delete();
		
		return redirect('/antrianObatIndex');
	}
}
