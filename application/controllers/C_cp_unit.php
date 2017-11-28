<?php
defined('BASEPATH') OR exit('No direct access allowed');

class C_cp_unit extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('M_cp_unit'); 
    }

    // Fungsi menambah & menyimpan data ke database
    function create(){
        
// Memanggil data dari database melalui Model
        if($this->input->post('submit')) {
            $nm_cp = $this->input->post('nm_cp');
            $email = $this->input->post('email');
            $data = array(
                'nm_cp'=>$nm_cp,
                'email'=>$email
            );
            // Memanggil model yang berisi data dari database
            $this->M_cp_unit->save_model($data);
            redirect('/C_cp_unit/index');
        }   
        // Memanggil view tambah unit
        $this->load->view('v_cp_unit/create');
    }

// Fungsi membaca atau menampilkan data dari database
    function index(){
        $data['hasil'] = $this->M_cp_unit->index_model();
        $this->load->view('v_cp_unit/index', $data);
        
    }

// Fungsi untuk tombol update
    function update($id_cp){
        $data['hasil'] = $this->M_cp_unit->get_data($id_cp);
        $this->load->view('v_cp_unit/update', $data);
    }

// Fungsi untuk mengupdate data
    function edit(){
         if($this->input->post('submit')) {
            $id_cp = $this->input->post('id_cp');
            $nm_cp = $this->input->post('nm_cp');
            $email = $this->input->post('email');
            $data = array(
                'nm_cp'=>$nm_cp,
                'email'=>$email
            );
            $this->M_cp_unit->update_model($data,$id_cp);
            redirect('/C_cp_unit/index');
        }
    }

// Fungsi menghapus data
    function deletedata($id_cp){
        $this->load->model('M_cp_unit');
        $query = $this->M_cp_unit->deletedata($id_cp);

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

        redirect('/C_cp_unit/index');        
    }
}

?>