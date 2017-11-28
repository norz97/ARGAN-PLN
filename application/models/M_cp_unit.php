<?php
defined('BASEPATH') OR exit('No direct access allowed');

class M_cp_unit extends CI_Model {

    function __construct(){
        parent::__construct();
    }

// Fungsi simpan data ke database
    function save_model($data){
        $this->db->insert('contact_person', $data);
    }

// Fungsi membaca atau menampilkan data dari database
    function index_model(){
        $baca = $this->db->query('select * from contact_person');
        if($baca->num_rows() > 0){
            foreach ($baca->result() as $data){
                $hasil[] = array(
                    'id_cp'=>$data->id_cp,
                    'nm_cp'=>$data->nm_cp,
                    'email'=>$data->email
                );
            }
            return json_encode ($hasil);
        }else{
            return false;
        }
    }

// Fungsi mengupdate data
    function update_model($data, $id_cp){
        $this->db->where('id_cp',$id_cp);
        $this->db->update('contact_person', $data);
    }

// Fungsi mengambil data dar database untuk di edit
    function get_data($id_cp){
       $baca = $this->db->query('select * from contact_person where id_cp='.$id_cp);
        if($baca->num_rows() > 0){
            foreach ($baca->result() as $data){
                $hasil[] = array(
                    'id_cp'=>$data->id_cp,
                    'nm_cp'=>$data->nm_cp,
                    'email'=>$data->email
                );
            }
            return $hasil;
        }else{
            return false;
        }
    }

// Fungsi menghapus data
    function deletedata($id_cp){      
        $data = array(
                'id_cp'=>$id_cp
                );      
        $result = $this->db->delete('contact_person',$data); 

        return $result;       
       }

       

}

?>