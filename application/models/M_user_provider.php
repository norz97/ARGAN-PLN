<?php
defined('BASEPATH') OR exit('No direct access allowed');

class M_user_provider extends CI_Model {

    function __construct(){
        parent::__construct();
    }

// Fungsi simpan data ke database
    function save_model($data){
        $this->db->insert('user_provider', $data);
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
        $this->db->from('user_provider');
        $this->db->join('grup_provider','user_provider.id_gprov = grup_provider.id_gprov');
        return json_encode ($this->db->get()->result_array());
    }

// Fungsi mengupdate data
    function update_model($data, $id_uprov){
        $this->db->where('id_uprov',$id_uprov);
        $this->db->update('user_provider', $data);
    }

// Fungsi mengambil data dar database untuk di edit
    function get_data($id_uprov){
       $baca = $this->db->query('select * from user_provider where id_uprov='.$id_uprov);
        if($baca->num_rows() > 0){
            foreach ($baca->result() as $data){
                $hasil[] = array(
                    'id_uprov'=>$data->id_uprov,
                    'nm_uprov'=>$data->nm_uprov,
                    'email'=>$data->email,
                    'id_gprov'=>$data->id_gprov
                );
            }
            return $hasil;
        }else{
            return false;
        }
    }

// Fungsi menghapus data
    function deletedata($id_uprov){      
        $data = array(
                'id_uprov'=>$id_uprov
                );      
        $result = $this->db->delete('user_provider',$data);

        return $result;        
       }

// Fungsi mengambil data dari tabel lain ke form select
    function getgprovlist() {
        $this->db->select("*");
        $this->db->from('grup_provider');
        $query = $this->db->get();
        return $query;
        }


}

?>