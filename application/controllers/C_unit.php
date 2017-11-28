<?php
defined('BASEPATH') OR exit('No direct access allowed');

class C_unit extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('M_unit'); 
    }

    // Fungsi menambah & menyimpan data ke database
    function create(){
        // Memanggil view tambah unit
        $this->load->view('v_unit/create');

// Memanggil data dari database melalui Model
        if($this->input->post('submit')) {
            $nm_unit = $this->input->post('nm_unit');
            $alamat = $this->input->post('alamat');
            $data = array(
                'nm_unit'=>$nm_unit,
                'alamat'=>$alamat
            );
            // Memanggil model yang berisi data dari database
            $this->M_unit->save_model($data);
            redirect('/C_unit/index');
        }   
    }

// Fungsi membaca atau menampilkan data dari database
    function index(){
        $data['hasil'] = $this->M_unit->index_model();
        $this->load->view('v_unit/index', $data);
    }

// Fungsi untuk tombol update
    function update($id_unit){
        $data['hasil'] = $this->M_unit->get_data($id_unit);
        $this->load->view('v_unit/update', $data);
    }

// Fungsi untuk mengupdate data
    function edit(){
         if($this->input->post('submit')) {
            $id_unit = $this->input->post('id_unit');
            $nm_unit = $this->input->post('nm_unit');
            $alamat = $this->input->post('alamat');
            $data = array(
                'nm_unit'=>$nm_unit,
                'alamat'=>$alamat
            );
            $this->M_unit->update_model($data,$id_unit);
            redirect('/C_unit/index');
        }
    }

// Fungsi menghapus data
    function deletedata($id_unit){
        $this->load->model('m_unit');
        $query = $this->M_unit->deletedata($id_unit);

        redirect('/C_unit/index');        
    }
}

?>