<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include('Super.php');

class antrian_obat extends Super
{
    
    function __construct()
    {
        parent::__construct();
        $this->language       = 'Indonesian'; 
        $this->tema           = "flexigrid"; 
        $this->tabel          = "antrian_obat";
        $this->active_id_menu = "Antrian obat";
        $this->nama_view      = "Antrian obat";
        $this->status         = true; 
        $this->field_tambah   = array(); 
        $this->field_edit     = array(); 
        $this->field_tampil   = array('id_obat','id_pasien','tgl_antrian_obat','no_antrian_obat'); 
        $this->folder_upload  = 'assets/uploads/files';
        $this->add            = true;
        $this->edit           = false;
        $this->delete         = false;
        $this->crud;
    }

    function index(){
            $data = [];
            if($this->crud->getState() == "add")
            redirect(base_url('admin/Antrian_obat/addAntrianobat'));
            
            $this->crud->set_relation('id_pasien','pasien','nama');
            $this->crud->set_relation('id_obat','kategori_obat','nama_obat');

            
            $this->crud->display_as('id_obat','obat'); 
            $this->crud->display_as('id_pasien','Nama Pasien'); 
            
            
            $data = array_merge($data,$this->generateBreadcumbs());
            $data = array_merge($data,$this->generateData());
            $this->generate();
            $data['output'] = $this->crud->render();
            $this->load->view('admin/'.$this->session->userdata('theme').'/v_index',$data);
    }

    private function generateBreadcumbs(){
        $data['breadcumbs'] = array(
                array(
                    'nama'=>'Dashboard',
                    'icon'=>'fa fa-dashboard',
                    'url'=>'admin/dashboard'
                ),
                array(
                    'nama'=>'Admin',
                    'icon'=>'fa fa-users',
                    'url'=>'admin/useradmin'
                ),
            );
        return $data;
    }

    public function addAntrianobat(){
        $data = [];
        $data = array_merge($data,$this->generateBreadcumbs());
        $data = array_merge($data,$this->generateData());
        $this->generate();

        $rowobat = $this->db->get('kategori_obat')->result();
        $data['getobat'] = $rowobat;
        

        $rowPasien =$this->db->get('pasien')->result();
        $data['getPasien'] = $rowPasien;

        $data['page'] = 'v_antrian_obat';
        $data['output'] = $this->crud->render();
        $this->load->view('admin/'.$this->session->userdata('theme').'/v_index',$data);
    }

    public function getNoAntrian(){
        $id_obat = $this->input->post('id_obat');
        $tanggal = date("Y-m-d");

        $this->db->where('antrian_obat.id_obat',$id_obat);
        $this->db->where('antrian_obat.tgl_antrian_obat',$tanggal);
        $sql = $this->db->get('antrian_obat');
        $getobat = $sql->num_rows();


        

        if($getobat==0){
            $this->db->where('id_obat',$id_obat);
            $sql2 = $this->db->get('kategori_obat');
            $rowobat = $sql2->row();
            $no = 1;
            $kode=$rowobat->kode_obat;
            $noAntrian = $kode.$no;
            $maks = $rowobat->jumlah_maksimal;

        }else{
            
            $this->db->limit(1);
            $this->db->order_by('no_antrian_obat',"DESC");
            $this->db->where('antrian_obat.id_obat',$id_obat);
            $this->db->where('antrian_obat.tgl_antrian_obat',$tanggal);
            $sql = $this->db->get('antrian_obat');
            $rowNo = $sql->row();


            $this->db->where('id_obat',$id_obat);
            $sql2 = $this->db->get('kategori_obat');
            $rowobat = $sql2->row();
            $kode = $rowobat->kode_obat;
            $no = $rowNo->no_antrian_obat + 1;
            $maks = $rowobat->jumlah_maksimal;

            
            $noAntrian = $kode.$no;
        }

        $hasil = array("no_hasil"=>$noAntrian, "no"=>$no, "maks"=>$maks);
        echo json_encode($hasil);
    }

    public function save(){
        
        $id_obat = $this->input->post('id_obat');
        $no_antrian_obat = $this->input->post('no_antrian_obat');
       
        $id_pasien = $this->input->post('id_pasien');
        $tanggal = date("Y-m-d");

        

        $this->db->set('id_obat',$id_obat);
        $this->db->set('no_antrian_obat',$no_antrian_obat);
        $this->db->set('id_pasien',$id_pasien);
        $this->db->set('tgl_antrian_obat',$tanggal);
        $this->db->insert('antrian_obat');

        redirect(base_url('admin/Antrian_obat'));

    }
}