<?php
defined('BASEPATH') OR exit('No direct access allowed');

class M_lapor extends CI_Model {

    function __construct(){
        parent::__construct();
    }

// Fungsi simpan data ke database
    function save_model($data){
        $this->db->insert('laporan', $data);
    }

    // Fungsi membaca atau menampilkan data dari database
    function index_model(){
        // $baca = $this->db->query('select * from nama_unit');
        // if($baca->num_rows() > 0){
        //     foreach ($baca->result() as $data){
        //         $hasil[] = array(
        //             'id'=>$data->id,
        //             'id_unit'=>$data->id_unit,
        //             'id_pic'=>$data->id_pic,
        //             'id_pic2'=>$data->id_pic,
        //             'ip_wan'=>$data->ip_wan,
        //             'ip_lan'=>$data->ip_lan,
        //             'perangkat'=>$data->perangkat,
        //             'telp_kantor'=>$data->telp_kantor,
        //             'icon_sid'=>$data->icon_sid,
        //             'telkom_sid'=>$data->telkom_sid,
        //             'id_gprov'=>$data->id_gprov
        //         );
        //     }
        //     return json_encode ($hasil);
        // }else{
        //     return false;
        // }
        $this->db->select('*');
        $this->db->from('laporan');
        $this->db->join('unit','laporan.id_unit = unit.id_unit');
        $this->db->join('grup_provider','laporan.id_gprov = grup_provider.id_gprov');
        return json_encode ($this->db->get()->result_array());
    }

    // Fungsi mengupdate data
    function update_model($data, $id_lapor){
        $this->db->where('id_lapor',$id_lapor);
        $this->db->update('laporan', $data);
    }

// Fungsi mengambil data dar database untuk di edit
    function get_data($id_lapor){
       $baca = $this->db->query('select * from laporan where id_lapor='.$id_lapor);
        if($baca->num_rows() > 0){
            foreach ($baca->result() as $data){
                $hasil[] = array(
                    'id_lapor'=>$data->id_lapor,
                    'no_tiket'=>$data->no_tiket,
                    'wktu_down'=>$data->wktu_down,
                    'wktu_up'=>$data->wktu_up,
                    'lama_gangguan'=>$data->lama_gangguan,
                    'no_tiket_icon'=>$data->no_tiket_icon,
                    'no_tiket_telkom'=>$data->no_tiket_telkom,
                    'sebab_gangguan'=>$data->sebab_gangguan
                );
            }
            return $hasil;
        }else{
            return false;
        }
    }

    // Fungsi menghapus data
    function deletedata($id_lapor){      
        $data = array(
                'id_lapor'=>$id_lapor
                );      
        $result = $this->db->delete('laporan',$data);

        return $result;        
       }

    
}

?>