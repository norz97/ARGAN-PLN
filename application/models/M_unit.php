<?php
defined('BASEPATH') OR exit('No direct access allowed');

class M_unit extends CI_Model {

    function __construct(){
        parent::__construct();
    }

// Fungsi simpan data ke database
    function save_model($data){
        $this->db->insert('unit', $data);
    }

// Fungsi membaca atau menampilkan data dari database
    function index_model(){
        $baca = $this->db->query('select * from unit');
        if($baca->num_rows() > 0){
            foreach ($baca->result() as $data){
                $hasil[] = array(
                    'id_unit'=>$data->id_unit,
                    'nm_unit'=>$data->nm_unit,
                    'alamat'=>$data->alamat
                );
            }
            return json_encode ($hasil);
        }else{
            return false;
        }
    }

// Fungsi mengupdate data
    function update_model($data, $id_unit){
        $this->db->where('id_unit',$id_unit);
        $this->db->update('unit', $data);
    }

// Fungsi mengambil data dar database untuk di edit
    function get_data($id_unit){
       $baca = $this->db->query('select * from unit where id_unit='.$id_unit);
        if($baca->num_rows() > 0){
            foreach ($baca->result() as $data){
                $hasil[] = array(
                    'id_unit'=>$data->id_unit,
                    'nm_unit'=>$data->nm_unit,
                    'alamat'=>$data->alamat
                );
            }
            return $hasil;
        }else{
            return false;
        }
    }

// Fungsi menghapus data
    function deletedata($id_unit){      
        $data = array(
                'id_unit'=>$id_unit
                );      
        $result = $this->db->delete('unit',$data); 

        return $result;      
       }

}

?>