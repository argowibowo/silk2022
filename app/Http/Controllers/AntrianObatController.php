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
    	$antrian_obat = DB::table('antrian_obat')->join('poli','poli.id','=','antrian_obat.id_poli')->get();
 
    	// mengirim data antrian_obat ke view index
    	return view('View_antrian_obat/antrianObat',['antrian_obat' => $antrian_obat]);

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
    	$poli=DB::table('poli')->get();
        $rekam_medis=DB::table('rekam_medis')->get();

    	return view('view_antrian_obat/tambahAntrianObat',compact('poli','rekam_medis'));

    }

	public function createAntrianObat(Request $request)
	{
		DB::table('antrian_obat')->insert([
			'tanggal' => $request->tanggal,
			'id_poli' => $request->id_poli,
			'id_rm' => $request->id_rm,
		]);
		return redirect(route('antrianObatIndex'))->with('add','-');
	}

	public function editAntrianObat(Request $request, $id_antrian_obat)
    {
        $antrian_obat = DB::table('antrian_obat')->join('poli','poli.id','=','antrian_obat.id_poli')->where('antrian_obat.id_antrian_obat',$id_antrian_obat)->get();
        $poli=DB::table('poli')->get();
        $rekam_medis=DB::table('rekam_medis')->get();
        return view('View_antrian_obat/edit',compact('antrian_obat','poli','rekam_medis'));

    }
    public function proseseditAntrianObat(Request $request,$id_antrian_obat)
    {
        DB::table('antrian_obat')->where('id_antrian_obat',$id_antrian_obat)->update([
            'tanggal' => $request->tanggal,
            'id_poli' => $request->id_poli,
            'id_rm' => $request->id_rm,
        ]);
        return redirect(route('antrianObatIndex'))->with('up','-');
    }
    public function hapusAntrianObat($id_antrian_obat)
    {
        DB::table('antrian_obat')->where('id_antrian_obat',$id_antrian_obat)->delete();
        return redirect(route('antrianObatIndex'))->with('del','-');
    }}
