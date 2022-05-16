<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class RawatJalanController extends Controller
{
    public function antrianPoliIndex()
    {
    	// mengambil data dari table antrian poli
    	$antrian_poli = DB::table('antrian_poli')->get();
 
    	// mengirim data antrian poli ke view index
    	return view('antrianPoliIndex',['antrian_poli' => $antrian_poli]);

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

    	return view('tambahAntrianPoli',['antrian_poli' => $antrian_poli]);

    }

	public function createAntrianPoli(Request $request)
	{
		DB::table('antrian_poli')->insert([
			'id_antrian_poli' => $request->id_antrian_poli,
			'tanggal' => $request->tanggal,
			'id_poli' => $request->id_poli,
			'no_rm' => $request->no_rm,
		]);
		return redirect('/antrianPoliIndex');
	}

	public function hapusAntrianPoli($id)
	{
		DB::table('antrian_poli')->where('id_antrian_poli',$id)->delete();
		
		return redirect('/antrianPoliIndex');
	}
	/*
	public function ubahAntrianPoli($id)
	{
		$pasien = DB::table('antrian_poli')->where('id_antrian_poli',$id)->get();

		return view('ubahAntrianPoli',['antrian_poli' => $antrian_poli]);

	}

	public function editAntrianPoli(Request $request)
	{
		DB::table('antrian_poli')->where('id_antrian_poli',$request->id)->update([
			'tanggal' => $request->tanggal,
			'id_poli' => $request->id_poli,
			'no_rm' => $request->no_rm,
		]);
		return redirect('/antrianPoliIndex');
	}*/

}



/*
namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class AntrianController extends Controller
{
    public function getAntrianPendaftaran(){
		$id_pendaftaran = $this->input->post('id_pendaftaran');
		$tanggal = date("Y-m-d");

		$this->db->where('antrian_pendaftaran.id_pendaftaran',$id_pendaftaran);
		$this->db->where('antrian_pendaftaran.tgl_antrian_pendaftaran',$tanggal);
		$sql = $this->db->get('antrian_pendaftaran');
        $getPendaftaran = $sql->num_rows();

    }
    public function getAntrianPoli(){
		$id_poli = $this->input->post('id_poli');
		$tanggal = date("Y-m-d");

		$this->db->where('antrian_poli.id_poli',$id_poli);
		$this->db->where('antrian_poli.tgl_antrian_poli',$tanggal);
		$sql = $this->db->get('antrian_poli');
        $getPoli = $sql->num_rows();
    }

    public function getAntrianObat(){
		$id_obat = $this->input->post('id_obat');
		$tanggal = date("Y-m-d");

		$this->db->where('antrian_obat.id_obat',$id_obat);
		$this->db->where('antrian_obat.tgl_antrian_obat',$tanggal);
		$sql = $this->db->get('antrian_obat');
        $getObat = $sql->num_rows();
    
    }

   

}*/