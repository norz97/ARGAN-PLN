<?php
defined('BASEPATH') OR exit('No direct access allowed');

class C_group_provider extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('M_group_provider'); 
        
    }

    // Fungsi menambah & menyimpan data ke database
    function create(){
        // Memanggil view tambah unit
        $this->load->view('v_group_prov/create');

// Memanggil data dari database melalui Model
        if($this->input->post('submit')) {
            $nm_gprov = $this->input->post('nm_gprov');
            $data = array(
                'nm_gprov'=>$nm_gprov
            );
            // Memanggil model yang berisi data dari database
            $this->M_group_provider->save_model($data);
            redirect('/C_group_provider/index');
        }   
    }

// Fungsi membaca atau menampilkan data dari database
    function index(){
        $data['hasil'] = $this->M_group_provider->index_model();
        $this->load->view('v_group_prov/index', $data);
    }

// Fungsi untuk tombol update
    function update($id_gprov){
        $data['hasil'] = $this->M_group_provider->get_data($id_gprov);
        $this->load->view('v_group_prov/update', $data);
    }

// Fungsi untuk mengupdate data
    function edit(){
         if($this->input->post('submit')) {
            $id_gprov = $this->input->post('id_gprov');
            $nm_gprov = $this->input->post('nm_gprov');
            $data = array(
                'nm_gprov'=>$nm_gprov
            );
            $this->M_group_provider->update_model($data,$id_gprov);
            redirect('/C_group_provider/index');
        }
    }

// Fungsi menghapus data
    function deletedata($id_gprov){
        $this->load->model('M_group_provider');
        $query = $this->M_group_provider->deletedata($id_gprov);

        // Jika delete query berhasil, maka return 1
        if( $query == 1) {

            // Setup session pesan delete jika berhasil
            $this->session->set_flashdata('action_status', '<div class="alert alert-info">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <i class="fa fa-info-circle"></i> Data berhasil di hapus</div>');

        } else {

            // Setup session pesan delete jika gagal
            $this->session->set_flashdata('action_status', '<div class="alert alert-danger">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                Data gagal di hapus</div>');            
        }
        
        redirect('/C_group_provider/index');        
    }
}

?>