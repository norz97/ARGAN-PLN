<?php
defined('BASEPATH') OR exit('No direct access allowed');

class M_pic_unit extends CI_Model {

    function __construct(){
        parent::__construct();
    }

// Fungsi simpan data ke database
    function save_model($data){
        $this->db->insert('pic_unit', $data);
    }

// Fungsi membaca atau menampilkan data dari database
    function index_model(){
        $baca = $this->db->query('select * from pic_unit');
        if($baca->num_rows() > 0){
            foreach ($baca->result() as $data){
                $hasil[] = array(
                    'id_pic'=>$data->id_pic,
                    'nm_pic'=>$data->nm_pic,
                    'no_telp'=>$data->no_telp,
                    'email'=>$data->email
                );
            }
            return json_encode ($hasil);
        }else{
            return false;
        }
    }

// Fungsi mengupdate data
    function update_model($data, $id_pic){
        $this->db->where('id_pic',$id_pic);
        $this->db->update('pic_unit', $data);
    }

// Fungsi mengambil data dar database untuk di edit
    function get_data($id_pic){
       $baca = $this->db->query('select * from pic_unit where id_pic='.$id_pic);
        if($baca->num_rows() > 0){
            foreach ($baca->result() as $data){
                $hasil[] = array(
                    'id_pic'=>$data->id_pic,
                    'nm_pic'=>$data->nm_pic,
                    'no_telp'=>$data->no_telp,
                    'email'=>$data->email
                );
            }
            return $hasil;
        }else{
            return false;
        }
    }

// Fungsi menghapus data
    function deletedata($id_pic){      
        $data = array(
                'id_pic'=>$id_pic
                );      
        $result = $this->db->delete('pic_unit',$data); 

        return $result;
       }

}

?>