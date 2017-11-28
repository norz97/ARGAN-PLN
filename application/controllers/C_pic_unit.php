<?php
defined('BASEPATH') OR exit('No direct access allowed');

class C_pic_unit extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('M_pic_unit'); 
        
    }

    // Fungsi menambah & menyimpan data ke database
    function create(){
        // Memanggil view tambah unit
        $this->load->view('v_pic_unit/create');

// Memanggil data dari database melalui Model
        if($this->input->post('submit')) {
            $nm_pic = $this->input->post('nm_pic');
            $no_telp = $this->input->post('no_telp');
            $email = $this->input->post('email');
            $data = array(
                'nm_pic'=>$nm_pic,
                'no_telp'=>$no_telp,
                'email'=>$email
            );
            // Memanggil model yang berisi data dari database
            $this->M_pic_unit->save_model($data);
            redirect('/C_pic_unit/index');
        }   
    }

// Fungsi membaca atau menampilkan data dari database
    function index(){
        $data['hasil'] = $this->M_pic_unit->index_model();
        $this->load->view('v_pic_unit/index', $data);
    }

// Fungsi untuk tombol update
    function update($id_pic){
        $data['hasil'] = $this->M_pic_unit->get_data($id_pic);
        $this->load->view('v_pic_unit/update', $data);
    }

// Fungsi untuk mengupdate data
    function edit(){
         if($this->input->post('submit')) {
            $id_pic = $this->input->post('id_pic');
            $nm_pic = $this->input->post('nm_pic');
            $no_telp = $this->input->post('no_telp');
            $email = $this->input->post('email');
            $data = array(
                'nm_pic'=>$nm_pic,
                'no_telp'=>$no_telp,
                'email'=>$email
            );
            $this->M_pic_unit->update_model($data,$id_pic);
            redirect('/C_pic_unit/index');
        }
    }

// Fungsi menghapus data
    function deletedata($id_pic){
        $this->load->model('M_pic_unit');
        $query = $this->M_pic_unit->deletedata($id_pic);

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

        redirect('/C_pic_unit/index');        
    }
}

?>