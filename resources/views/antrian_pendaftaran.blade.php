<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include('Super.php');

class antrian_pendaftaran extends Super
{
    
    function __construct()
    {
        parent::__construct();
        $this->language       = 'Indonesian ';
        $this->tema           = "flexigrid"; 
        $this->tabel          = "antrian_pendaftaran";
        $this->active_id_menu = "ntrian pendaftaran";
        $this->nama_view      = "antrian pendaftaran";
        $this->status         = true; 
        $this->field_tambah   = array(); 
        $this->field_edit     = array(); 
        $this->field_tampil   = array('id_pendaftaran','id_pasien','tgl_antrian_pendaftaran','no_antrian_pendaftaran'); 
        $this->folder_upload  = 'assets/uploads/files';
        $this->add            = true;
        $this->edit           = false;
        $this->delete         = false;
        $this->crud;
    }

    function index(){
            $data = [];
            if($this->crud->getState() == "add")
            redirect(base_url('admin/antrian_pendaftaran/addantrianpendaftaran'));
        


            
            $this->crud->set_relation('id_pasien','pasien','nama');
            $this->crud->set_relation('id_pendaftaran','kategori_pendaftaran','nama_pendaftaran');

        
            $this->crud->display_as('id_pendaftaran','pendaftaran'); 
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

    public function addantrianpendaftaran(){
        $data = [];
        $data = array_merge($data,$this->generateBreadcumbs());
        $data = array_merge($data,$this->generateData());
        $this->generate();

        $rowpendaftaran = $this->db->get('kategori_pendaftaran')->result();
        $data['getpendaftaran'] = $rowpendaftaran;
        

        $rowPasien =$this->db->get('pasien')->result();
        $data['getPasien'] = $rowPasien;

        $data['page'] = 'v_antrian_pendaftaran';
        $data['output'] = $this->crud->render();
        $this->load->view('admin/'.$this->session->userdata('theme').'/v_index',$data);
    }

    public function getNoantrian(){
        $id_pendaftaran = $this->input->post('id_pendaftaran');
        $tanggal = date("Y-m-d");

        $this->db->where('antrian_pendaftaran.id_pendaftaran',$id_pendaftaran);
        $this->db->where('antrian_pendaftaran.tgl_antrian_pendaftaran',$tanggal);
        $sql = $this->db->get('antrian_pendaftaran');
        $getpendaftaran = $sql->num_rows();


        

        if($getpendaftaran==0){
            $this->db->where('id_pendaftaran',$id_pendaftaran);
            $sql2 = $this->db->get('kategori_pendaftaran');
            $rowpendaftaran = $sql2->row();
            $no = 1;
            $kode=$rowpendaftaran->kode_pendaftaran;
            $noantrian = $kode.$no;
            $maks = $rowpendaftaran->jumlah_maksimal;

        }else{
            
            $this->db->limit(1);
            $this->db->order_by('no_antrian_pendaftaran',"DESC");
            $this->db->where('antrian_pendaftaran.id_pendaftaran',$id_pendaftaran);
            $this->db->where('antrian_pendaftaran.tgl_antrian_pendaftaran',$tanggal);
            $sql = $this->db->get('antrian_pendaftaran');
            $rowNo = $sql->row();


            $this->db->where('id_pendaftaran',$id_pendaftaran);
            $sql2 = $this->db->get('kategori_pendaftaran');
            $rowpendaftaran = $sql2->row();
            $kode = $rowpendaftaran->kode_pendaftaran;
            $no = $rowNo->no_antrian_pendaftaran + 1;
            $maks = $rowpendaftaran->jumlah_maksimal;

            
            $noantrian = $kode.$no;
        }

        $hasil = array("no_hasil"=>$noantrian, "no"=>$no, "maks"=>$maks);
        echo json_encode($hasil);
    }

    public function save(){
        
        $id_pendaftaran = $this->input->post('id_pendaftaran');
        $no_antrian_pendaftaran = $this->input->post('no_antrian_pendaftaran');
        
        $id_pasien = $this->input->post('id_pasien');
        $tanggal = date("Y-m-d");

      

        $this->db->set('id_pendaftaran',$id_pendaftaran);
        $this->db->set('no_antrian_pendaftaran',$no_antrian_pendaftaran);
        $this->db->set('id_pasien',$id_pasien);
        $this->db->set('tgl_antrian_pendaftaran',$tanggal);
        $this->db->insert('antrian_pendaftaran');

        redirect(base_url('admin/antrian_pendaftaran'));

    }
}