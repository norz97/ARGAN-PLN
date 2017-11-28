<?php
defined('BASEPATH') OR exit('No direct access allowed');

class M_group_provider extends CI_Model {

    function __construct(){
        parent::__construct();
    }

// Fungsi simpan data ke database
    function save_model($data){
        $this->db->insert('grup_provider', $data);
    }

// Fungsi membaca atau menampilkan data dari database
    function index_model(){
        $baca = $this->db->query('select * from grup_provider');
        if($baca->num_rows() > 0){
            foreach ($baca->result() as $data){
                $hasil[] = array(
                    'id_gprov'=>$data->id_gprov,
                    'nm_gprov'=>$data->nm_gprov
                );
            }
            return json_encode ($hasil);
        }else{
            return false;
        }
    }

// Fungsi mengupdate data
    function update_model($data, $id_gprov){
        $this->db->where('id_gprov',$id_gprov);
        $this->db->update('grup_provider', $data);
    }

// Fungsi mengambil data dari database untuk di edit
    function get_data($id_gprov){
       $baca = $this->db->query('select * from grup_provider where id_gprov='.$id_gprov);
        if($baca->num_rows() > 0){
            foreach ($baca->result() as $data){
                $hasil[] = array(
                    'id_gprov'=>$data->id_gprov,
                    'nm_gprov'=>$data->nm_gprov
                );
            }
            return $hasil;
        }else{
            return false;
        }
    }

// Fungsi menghapus data
    function deletedata($id_gprov){      
        $data = array(
                'id_gprov'=>$id_gprov
                );      
        $result = $this->db->delete('grup_provider',$data); 

        return $result;
       }

}

?>