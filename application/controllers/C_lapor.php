<?php
defined('BASEPATH') OR exit('No direct access allowed');

class C_lapor extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('M_lapor'); 
    }

    // Fungsi menambah & menyimpan data ke database
    function create(){
        // Memanggil view tambah unit
        $this->load->view('v_laporan/create', $data);

        // Memanggil data dari database melalui Model
        if($this->input->post('submit')) {
            $id_unit = $this->input->post('id_unit');
            $id_kirim = $this->input->post('id_kirim');
            $id_gprov = $this->input->post('id_gprov');
            $wktu_down = $this->input->post('wktu_down');
            $data = array(
                'id_unit'=>$id_unit,
                'id_gprov'=>$id_gprov,
                'wktu_down'=>$wktu_down
            );
            // Memanggil model yang berisi data dari database
            $this->M_lapor->save_model($data);

            $this->load->library('email');
            $this->load->model('M_data_lapor');
            $data['id_kirim'] = $this->M_data_lapor->cek($id_kirim);
            $data['user_prov'] = $this->M_data_lapor->uprovlist($id_gprov);

           
            $subject = 'Laporan';
                    foreach ($data['id_kirim'] as $value){
                        // CONCATENATE THE RESULT OF EACH ITERATION
                        // TO THE $body VARIABLE...
                        // NOTICE THE «DOT EQUALS» OPERATOR IN $body .='....'
                        $body  = '
                                <tr>
                                    <td><b>- Unit : </b>'.$value['nm_unit'].'</td>
                                </tr>
                                <tr>
                                    <td><b>- PIC 1 : </b>'.$value['nm_pic'].'</td>
                                </tr>
                                <tr>
                                    <td><b>- PIC 2 : </b>'.$value['nm_pic_b'].'</td>
                                </tr>
                                <tr>
                                    <td><b>- IP WAN : </b>'.$value['ip_wan'].'</td>
                                </tr>
                                <tr>
                                    <td><b>- IP LAN :</b> '.$value['ip_lan'].'</td>
                                </tr>
                                <tr>
                                    <td><b>- Device : </b>'.$value['perangkat'].'</td>
                                </tr>
                                <tr>
                                    <td><b>- Telp Kantor : </b>'.$value['telp_kantor'].'</td>
                                </tr>
                                <tr>
                                    <td><b>- Icon SID : </b>'.$value['icon_sid'].'</td>
                                </tr>
                                <tr>
                                    <td><b>- Telkom SID : </b>'.$value['telkom_sid'].'</td>
                                </tr>
                                <tr>
                                    <td><b>- Group Provider : </b>'.$value['nm_gprov'].'</td>
                                </tr>';
                    }

            foreach ($data['user_prov'] as $uprov) {

            $result = $this->email
                    ->from('norz914@gmail.com','PLN Kaltimra')
                    // ->reply_to('yoursecondemail@somedomain.com')    // Optional, an account where a human being reads.
                    ->to($uprov['email'])
                    ->subject($subject)
                    ->message($body)
                    ->send();
            }

            redirect('/C_data_laporan/index');
        }   
    }


// Fungsi membaca atau menampilkan data dari database
    function index(){
        $data['hasil'] = $this->M_lapor->index_model();
        $this->load->view('v_data_lapor/index', $data);
    }

    //Fungsi untuk tombol update
    function update($id_lapor){
        $data['hasil'] = $this->M_lapor->get_data($id_lapor);
        $this->load->view('v_laporan/update', $data);
    }

// Fungsi untuk mengupdate data
    function edit(){

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
            redirect('/C_lapor/index');
        }
    }

    // Fungsi menghapus data
    function deletedata($id_lapor){
        $this->load->model('M_lapor');
        $query = $this->M_lapor->deletedata($id_lapor);
        redirect('/C_lapor/index');        
    }

}

?>