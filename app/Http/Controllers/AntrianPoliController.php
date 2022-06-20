<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class AntrianPoliController extends Controller
{
    public function antrianPoliIndex()
    {
    	// mengambil data dari table antrian poli
    	$antrian_poli = DB::table('antrian_poli')->join('poli','poli.id','=','antrian_poli.id_poli')->get();
 
    	// mengirim data antrian poli ke view index
    	return view('View_antrian_poli/antrianPoliIndex',['antrian_poli' => $antrian_poli]);

    }

	public function getpAntrianPoli()
    {
    	// mengambil data dari table antrian poli
    	$antrian_poli = DB::table('antrian_poli')->get();
 
    	// mengirim data antrian poli ke view index
    	if($antrian_poli){
            return response()->json(["Result"=>
                    ["ResultCode"=> 1,
                    "ResultMessage"=>"Success get data antrian poli" ],
                    "DataUser"=>$antrian_poli
                ], 200
            );
    	}
	}

    public function tambahAntrianPoli()
    {
    	$antrian_poli = DB::table('antrian_poli')->get();
    	$poli=DB::table('poli')->get();
    	$rekam_medis=DB::table('rekam_medis')->get();
    	return view('View_antrian_poli/tambahAntrianPoli',compact('antrian_poli','poli','rekam_medis'));

    }
    public function editAntrianPoli(Request $request, $id_antrian_poli)
    {
    	$antrian_poli = DB::table('antrian_poli')->join('poli','poli.id','=','antrian_poli.id_poli')->where('antrian_poli.id_antrian_poli',$id_antrian_poli)->get();
    	$poli=DB::table('poli')->get();
    	$rekam_medis=DB::table('rekam_medis')->get();
    	return view('View_antrian_poli/edit',compact('antrian_poli','poli','rekam_medis'));

    }
    public function proseseditAntrianPoli(Request $request,$id_antrian_poli)
	{
		DB::table('antrian_poli')->where('id_antrian_poli',$id_antrian_poli)->update([
			'tanggal' => $request->tanggal,
			'id_poli' => $request->id_poli,
			'no_rm' => $request->no_rm,
		]);
		return redirect(route('antrianPoliIndex'))->with('up','-');
	}
	public function hapusAntrianPoli($id_antrian_poli)
	{
		DB::table('antrian_poli')->where('id_antrian_poli',$id_antrian_poli)->delete();
		return redirect(route('antrianPoliIndex'))->with('del','-');
	}

	public function createAntrianPoli(Request $request)
	{
		DB::table('antrian_poli')->insert([
			'tanggal' => $request->tanggal,
			'id_poli' => $request->id_poli,
			'no_rm' => $request->no_rm,
		]);
		return redirect(route('antrianPoliIndex'))->with('add','-');
	}
