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
public function checkup()
    {
    	// mengambil data dari table pasien
    	$pasien = DB::table('pasien')->get();
 
    	// mengirim data pasien ke view index
    	return view('checkup',['pasien' => $pasien]);
 
    }
//////////////masih coba belum fix////////////////////////
public function dashcheckup()
{
	// mengambil data dari api pasien
	$data_pasien = Http::get('http://localhost/silk2022/public/getdatapasien')->json();
	

	// mengirim data poli ke view index
	return view('checkup.blade', compact('data_pasien'));

}
public function getAllCheckup() {

        $getAlldata = DB::table('antrian_poli')
                        ->join('poli', 'poli.id', '=', 'antrian_poli.id_poli')
                        ->join('pasien', 'pasien.no_rm', '=', 'antrian_poli.no_rm')
                        ->get();

		return view('checkup', compact('getAlldata'));
    }

	

////// /////////////////////////////////////////////////////////////////////////////////////////


// public function checkup_tambah()
//     {
//     	$pasien = DB::table('pasien')->get();

//     	return view('checkup_tambah',['pasien' => $pasien]);
 
//     }
	public function checkup_update(Request $request)
{
	DB::table('antrian_poli')->where('id_antrian_poli',$request->id)->update([
		'id_poli' => $request->id_poli,
		'no_rm' => $request->no_rm,
	]);
	return redirect('/checkup');
}
public function checkup_edit($id)
{
	// $antrian = DB::table('antrian_poli')->where('id_antrian_poli',$id)->get();
	$antrian = DB::table('antrian_poli')
	->join('poli', 'poli.id', '=', 'antrian_poli.id_poli')
	->join('pasien', 'pasien.no_rm', '=', 'antrian_poli.no_rm')
	->find($id);
	
	$poli = DB::table('poli')->get();

	return view('checkup_ubah',['antrian_poli' => $antrian],['poli' => $poli]);

}

public function checkup_tambah()
{

	// $poli = Http::get('http://localhost/silk2022/public/getdatapoli')->json();
	$poli = DB::table('poli')->get();

	// mengirim data poli ke view index
	return view('checkup_tambah', compact('poli'));

}

public function createcheckup(Request $request)
{
	DB::table('antrian_poli')->insert([
		'tanggal' => $request->tanggal,
		'no_rm' => $request->no_rm,
		'id_poli' => $request->id_poli,
	]);
	return redirect('/checkup');
}
    public function checkup_hapus($id)
{
	DB::table('antrian_poli')->where('id_antrian_poli',$id)->delete();
	
	return redirect('/checkup');
}

// public function autocomplete(Request $request)
// {
//     try {
//         $getFields = pasien::all()
//         ->where('no_rm',$request->get('no_rm'))->first();
//         // here you could check for data and throw an exception if not found e.g.
//         // if(!$getFields) {
//         //     throw new \Exception('Data not found');
//         // }
//         return response()->json($getFields, 200);
//     } catch (\Exception $e) {
//         return response()->json(['message' => $e->getMessage()], 500);
//     }
// }
	
	
}
