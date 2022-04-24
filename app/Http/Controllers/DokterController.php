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

	public function getdokter()
    {
    	// mengambil data dari table poli
    	$dokter = DB::table('dokter')->get();
 
    	// mengirim data poli ke view index
    	if($dokter){
            return response()->json(["Result"=>
                    ["ResultCode"=> 1,
                    "ResultMessage"=>"Success get data dokter" ],
                    "DataUser"=>$dokter
                ], 200
            );
    	}
	}

	public function dokter_tambah()
    {
    	$dokter = DB::table('dokter')->get();

    	return view('dokter_tambah',['dokter' => $dokter]);
 
    }

    // method untuk insert data ke table poli
public function createdokter(Request $request)
{
	DB::table('dokter')->insert([
		'id' => $request->id,
		'nama_dokter' => $request->nama_dokter
	]);
	return redirect('/dokterindex');
}


public function dokter_delete($id)
{
	DB::table('dokter')->where('id',$id)->delete();
	
	return redirect('/dokterindex');
}

public function dokter_edit($id)
{
	$dokter = DB::table('dokter')->where('id',$id)->get();

	return view('dokter_edit',['dokter' => $dokter]);

}
public function dokter_update(Request $request)
{
	DB::table('dokter')->where('id',$request->id)->update([
		'nama_dokter' => $request->nama_dokter,
	]);
	return redirect('/dokterindex');
}

}
