<?php
defined('BASEPATH') OR exit('No direct access allowed');

class C_data_laporan extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('M_data_lapor');
        $this->load->model('M_lapor');
    }

// Fungsi menambah & menyimpan data ke database
    function create(){
        // Memanggil view tambah unit
        $data['unitlist'] = $this->M_data_lapor->getunitlist();
        $data['piclist'] = $this->M_data_lapor->getpiclist();
        $data['piclist2'] = $this->M_data_lapor->getpiclist2();
        $data['gprovlist'] = $this->M_data_lapor->getgprovlist();
        $this->load->view('v_data_lapor/create', $data);

// Memanggil data dari database melalui Model
        if($this->input->post('submit')) {
            $id_unit = $this->input->post('id_unit');
            $id_pic = $this->input->post('id_pic');
            $id_pic2 = $this->input->post('id_pic2');
            $ip_wan = $this->input->post('ip_wan');
            $ip_lan = $this->input->post('ip_lan');
            $perangkat = $this->input->post('perangkat');
            $telp_kantor = $this->input->post('telp_kantor');
            $icon_sid = $this->input->post('icon_sid');
            $telkom_sid = $this->input->post('telkom_sid');
            $id_gprov = $this->input->post('id_gprov');
            $data = array(
                'id_unit'=>$id_unit,
                'id_pic'=>$id_pic,
                'id_pic2'=>$id_pic2,
                'ip_wan'=>$ip_wan,
                'ip_lan'=>$ip_lan,
                'perangkat'=>$perangkat,
                'telp_kantor'=>$telp_kantor,
                'icon_sid'=>$icon_sid,
                'telkom_sid'=>$telkom_sid,
                'id_gprov'=>$id_gprov
            );
            // Memanggil model yang berisi data dari database
            $this->M_data_lapor->save_model($data);
            redirect('/C_data_laporan/index');
        }   
    }

// Fungsi membaca atau menampilkan data dari database
    function index(){
        $data['hasil'] = $this->M_data_lapor->index_model();
        $data['hasil2'] = $this->M_lapor->index_model();
        $this->load->view('v_data_lapor/index', $data);
    }


// Fungsi untuk tombol update
    function update($id){
        $data['hasil'] = $this->M_data_lapor->get_data($id);
        $data['unitlist'] = $this->M_data_lapor->getunitlist();
        $data['piclist'] = $this->M_data_lapor->getpiclist();
        $data['piclist2'] = $this->M_data_lapor->getpiclist2();
        $data['gprovlist'] = $this->M_data_lapor->getgprovlist();
        $this->load->view('v_data_lapor/update', $data);
    }

     //Fungsi untuk tombol update
    function update2($id_lapor){
        $data['hasil'] = $this->M_lapor->get_data($id_lapor);
        $this->load->view('v_laporan/update', $data);
    }

// Fungsi untuk mengupdate data
    function edit(){

         if($this->input->post('submit')) {
            $id = $this->input->post('id');
            $id_unit = $this->input->post('id_unit');
            $id_pic = $this->input->post('id_pic');
            $id_pic2 = $this->input->post('id_pic2');
            $ip_wan = $this->input->post('ip_wan');
            $ip_lan = $this->input->post('ip_lan');
            $perangkat = $this->input->post('perangkat');
            $telp_kantor = $this->input->post('telp_kantor');
            $icon_sid = $this->input->post('icon_sid');
            $telkom_sid = $this->input->post('telkom_sid');
            $id_gprov = $this->input->post('id_gprov');
            $data = array(
                'id_unit'=>$id_unit,
                'id_pic'=>$id_pic,
                'id_pic2'=>$id_pic2,
                'ip_wan'=>$ip_wan,
                'ip_lan'=>$ip_lan,
                'perangkat'=>$perangkat,
                'telp_kantor'=>$telp_kantor,
                'icon_sid'=>$icon_sid,
                'telkom_sid'=>$telkom_sid,
                'id_gprov'=>$id_gprov
            );
            $this->M_data_lapor->update_model($data,$id);
            redirect('/C_data_laporan/index');
        }
    }

    // Fungsi untuk mengupdate data
    function edit2(){

         if($this->input->post('submit')) {
            $id_lapor = $this->input->post('id_lapor');
            $no_tiket = $this->input->post('no_tiket');
            $wktu_down = $this->input->post('wktu_down');
            $wktu_up = $this->input->post('wktu_up');
            $lama_gangguan = $this->input->post('lama_gangguan');
            $no_tiket_icon = $this->input->post('no_tiket_icon');
            $no_tiket_telkom = $this->input->post('no_tiket_telkom');
            $sebab_gangguan = $this->input->post('sebab_gangguan');
            $data = array(
                'no_tiket'=>$no_tiket,
                'wktu_down'=>$wktu_down,
                'wktu_up'=>$wktu_up,
                'lama_gangguan'=>$lama_gangguan,
                'no_tiket_icon'=>$no_tiket_icon,
                'no_tiket_telkom'=>$no_tiket_telkom,
                'sebab_gangguan'=>$sebab_gangguan
            );
            $this->M_lapor->update_model($data,$id_lapor);
            redirect('/C_data_laporan/index');
        }
    }

    // Fungsi Lapor
    function lapor($id){
       
        $data['hasil'] = $this->M_data_lapor->get_data_lapor($id);
        $data['id_kirim'] = $id;
        
        $this->load->view('v_laporan/create', $data);  

        // echo"<pre>";
        // print_r(json_decode($data['hasil']));
        // echo "</pre>";  
    }


// Fungsi menghapus data
    function deletedata($id){
        $this->load->model('M_data_lapor');
        $query = $this->M_data_lapor->deletedata($id);

        redirect('/C_data_laporan/index');        
    }

    // Fungsi menghapus data
    function deletedata2($id_lapor){
        $this->load->model('M_lapor');
        $query = $this->M_lapor->deletedata($id_lapor);
        redirect('/C_data_laporan/index');        
    }


}
?>