<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PasienController extends Controller
{
    public function pasienindex()
    {
    	// mengambil data dari table pasien
    	$pasien = DB::table('pasien')->get();
 
    	// mengirim data pasien ke view index
    	return view('pasienindex',['pasien' => $pasien]);
 
    }

	public function getpasien()
    {
    	// mengambil data dari table pasien
    	$pasien = DB::table('pasien')->get();
 
    	// mengirim data pasien ke view index
    	if($pasien){
            return response()->json(["Result"=>
                    ["ResultCode"=> 1,
                    "ResultMessage"=>"Success get data pasien" ],
                    "DataUser"=>$pasien
                ], 200
            );
    	}
	}

    public function tambahpasien()
    {
    	$pasien = DB::table('pasien')->get();

    	return view('tambahpasien',['pasien' => $pasien]);
 
    }

    // method untuk insert data ke table pasien
public function createpasien(Request $request)
{
	DB::table('pasien')->insert([
		'nama' => $request->nama,
		'alamat' => $request->alamat,
		'nik' => $request->nik,
		'telp' => $request->telp,
        'ibu_kandung' => $request->ibu_kandung,
        'gol_darah' => $request->gol_darah,
        'tgl_lahir' => $request->tgl_lahir,
        'jk' => $request->jk,

	]);
	return redirect('/pasienindex');
}

public function hapuspasien($id)
{
	DB::table('pasien')->where('no_rm',$id)->delete();
	
	return redirect('/pasienindex');
}

public function ubahpasien($id)
{
	$pasien = DB::table('pasien')->where('no_rm',$id)->get();

	return view('ubahpasien',['pasien' => $pasien]);

}
public function editpasien(Request $request)
{
	DB::table('pasien')->where('no_rm',$request->id)->update([
		'nama' => $request->nama,
		'alamat' => $request->alamat,
		'nik' => $request->nik,
		'telp' => $request->telp,
        'ibu_kandung' => $request->ibu_kandung,
        'gol_darah' => $request->gol_darah,
        'tgl_lahir' => $request->tgl_lahir,
        'jk' => $request->jk,

	]);
	return redirect('/pasienindex');
}
	
}
