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

	/*public function ubahAntrianPendaftaran($id)
	{
		$pasien = DB::table('antrian_pendaftaran')->where('id_antrian_pendaftaran',$id)->get();

		return view('ubahAntrianPendaftaran',['antrian_pendaftaran' => $antrian_pendaftaran]);

	}

	public function editAntrianPendaftaran(Request $request)
	{
		DB::table('antrian_pendaftaran')->where('id_antrian_pendaftaran',$request->id)->update([
			'id_antrian_pendaftaran' => $request->id_antrian_pendaftaran,
			'tanggal' => $request->tanggal,
		]);
		return redirect('/antrianPendaftaranIndex');
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
