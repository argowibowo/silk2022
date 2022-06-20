<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class AntrianPendaftaranController extends Controller
{
    public function antrianPendaftaranIndex()
    {
    	// mengambil data dari table antrian_pendaftaran
    	$antrian_pendaftaran = DB::table('antrian_pendaftaran')->get();
 
    	// mengirim data antrian_pendaftaran ke view index
    	return view('view_antrian_pendaftaran/antrianPendaftaranIndex',['antrian_pendaftaran' => $antrian_pendaftaran]);

    }

	public function getpAntrianPendaftaran()
    {
    	// mengambil data dari table antrian_pendaftaran
    	$antrian_pendaftaran = DB::table('antrian_pendaftaran')->get();
 
    	// mengirim data antrian_pendaftaran ke view index
    	if($antrian_pendaftaran){
            return response()->json(["Result"=>
                    ["ResultCode"=> 1,
                    "ResultMessage"=>"Success get data antrian pendaftaran" ],
                    "DataUser"=>$antrian_pendaftaran
                ], 200
            );
    	}
	}

    public function tambahAntrianPendaftaran()
    {
    	$antrian_pendaftaran = DB::table('antrian_pendaftaran')->get();

    	return view('view_antrian_pendaftaran/tambahAntrianPendaftaran',['antrian_pendaftaran' => $antrian_pendaftaran]);

    }

	public function createAntrianPendaftaran(Request $request)
	{
		DB::table('antrian_pendaftaran')->insert([
			'id_antrian_pendaftaran' => $request->id_antrian_pendaftaran,
			'tanggal' => $request->tanggal,
		]);
		return redirect('/antrianPendaftaranIndex');
	}

	public function hapusAntrianPendaftaran($id)
	{
		DB::table('antrian_pendaftaran')->where('id_antrian_pendaftaran',$id)->delete();
		
		return redirect('/antrianPendaftaranIndex');
	}
