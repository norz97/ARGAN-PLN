<?php
defined('BASEPATH') OR exit('No direct access allowed');

class C_user_provider extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('M_user_provider'); 
    }

// Fungsi menambah & menyimpan data ke database
    function create(){
        // Memanggil view tambah unit
        $data['gprovlist'] = $this->M_user_provider->getgprovlist();
        $this->load->view('v_user_prov/create', $data);
        //echo "<pre>";
        //print_r($data['gprovlist']->result());
        //echo "</pre>";
// Memanggil data dari database melalui Model
        if($this->input->post('submit')) {
            $nm_uprov = $this->input->post('nm_uprov');
            $email = $this->input->post('email');
            $id_gprov = $this->input->post('id_gprov');
            $data = array(
                'nm_uprov'=>$nm_uprov,
                'email'=>$email,
                'id_gprov'=>$id_gprov
            );
            // Memanggil model yang berisi data dari database
            $this->M_user_provider->save_model($data);
            redirect('/C_user_provider/index');
        }   
    }

// Fungsi membaca atau menampilkan data dari database
    function index(){
        $data['hasil'] = $this->M_user_provider->index_model();
        $this->load->view('v_user_prov/index', $data);
    }

// Fungsi untuk tombol update
    function update($id_uprov){
        $data['hasil'] = $this->M_user_provider->get_data($id_uprov);
        $data['gprovlist'] = $this->M_user_provider->getgprovlist();
        $this->load->view('v_user_prov/update', $data);
    }

// Fungsi untuk mengupdate data
    function edit(){

         if($this->input->post('submit')) {
            $id_uprov = $this->input->post('id_uprov');
            $nm_uprov = $this->input->post('nm_uprov');
            $email = $this->input->post('email');
            $id_gprov = $this->input->post('id_gprov');
            $data = array(
                'nm_uprov'=>$nm_uprov,
                'email'=>$email,
                'id_gprov'=>$id_gprov
            );
            $this->M_user_provider->update_model($data,$id_uprov);
            redirect('/C_user_provider/index');
        }
    }

// Fungsi menghapus data
    function deletedata($id_uprov){
        $this->load->model('M_user_provider');
        $query = $this->M_user_provider->deletedata($id_uprov);

        // Notifikasi delete
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

        redirect('/C_user_provider/index');        
    }


}
?>