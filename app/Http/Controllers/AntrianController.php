<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class AntrianController extends BaseController
{
    public function getAntrianPendaftaran(){
		$id_pendaftaran = $this->input->post('id_pendaftaran');
		$tanggal = date("Y-m-d");

		$this->db->where('antrian_pendaftaran.id_pendaftaran',$id_pendaftaran);
		$this->db->where('antrian_pendaftaran.tgl_antrian_pendaftaran',$tanggal);
		$sql = $this->db->get('antrian_pendaftaran');
        $getPoli = $sql->num_rows();

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
        $getPoli = $sql->num_rows();
    
    }

   

}