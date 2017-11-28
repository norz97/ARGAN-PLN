<?php
defined('BASEPATH') OR exit('No direct access allowed');

class M_data_lapor extends CI_Model {

    function __construct(){
        parent::__construct();
    }

// Fungsi simpan data ke database
    function save_model($data){
        $this->db->insert('data_lapor', $data);
    }

// Fungsi membaca atau menampilkan data dari database
    function index_model(){
        // $baca = $this->db->query('select * from data_lapor');
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
        $this->db->select('data_lapor.*,unit.*,grup_provider.*,a.nm_pic,b.nm_pic as nm_pic_b');
        $this->db->from('data_lapor');
        $this->db->join('unit','data_lapor.id_unit = unit.id_unit');
        $this->db->join('pic_unit a','data_lapor.id_pic = a.id_pic');
        $this->db->join('pic_unit b','data_lapor.id_pic2 = b.id_pic');
        $this->db->join('grup_provider','data_lapor.id_gprov = grup_provider.id_gprov');
        return json_encode ($this->db->get()->result_array());
    }

// Fungsi mengupdate data
    function update_model($data, $id){
        $this->db->where('id',$id);
        $this->db->update('data_lapor', $data);
    }

// Fungsi mengambil data dar database untuk di edit
    function get_data($id){
       $baca = $this->db->query('select * from data_lapor where id='.$id);
        if($baca->num_rows() > 0){
            foreach ($baca->result() as $data){
                $hasil[] = array(
                    'id'=>$data->id,
                    'id_unit'=>$data->id_unit,
                    'id_pic'=>$data->id_pic,
                    'id_pic2'=>$data->id_pic2,
                    'ip_wan'=>$data->ip_wan,
                    'ip_lan'=>$data->ip_lan,
                    'perangkat'=>$data->perangkat,
                    'telp_kantor'=>$data->telp_kantor,
                    'icon_sid'=>$data->icon_sid,
                    'telkom_sid'=>$data->telkom_sid,
                    'id_gprov'=>$data->id_gprov
                );
            }
            return $hasil;
        }else{
            return false;
        }
    }

    // Fungsi lapor
    function get_data_lapor($id){
        $this->db->select('*');
        $this->db->from('data_lapor');
        $this->db->join('unit','data_lapor.id_unit = unit.id_unit');
        $this->db->join('grup_provider','data_lapor.id_gprov = grup_provider.id_gprov');
        $this->db->where('id',$id);
        return json_encode ($this->db->get()->result_array());
    }

// Fungsi menghapus data
    function deletedata($id){      
        $data = array(
                'id'=>$id
                );      
        $result = $this->db->delete('data_lapor',$data);

        return $result;        
       }

// Fungsi mengambil data dari tabel lain ke form select
    function getunitlist() {
        $this->db->select("*");
        $this->db->from('unit');
        $query = $this->db->get();
        return $query;
        }
    function getpiclist() {
        $this->db->select("*");
        $this->db->from('pic_unit');
        $query = $this->db->get();
        return $query;
        }
    function getpiclist2() {
        $this->db->select("*");
        $this->db->from('pic_unit');
        $query = $this->db->get();
        return $query;
        }
    function getgprovlist() {
        $this->db->select("*");
        $this->db->from('grup_provider');
        $query = $this->db->get();
        return $query;
        }

    function cek($id){
        $this->db->select("data_lapor.*,unit.*,grup_provider.*,a.nm_pic,b.nm_pic as nm_pic_b");
        $this->db->from('data_lapor');
        $this->db->join('unit','data_lapor.id_unit = unit.id_unit');
        $this->db->join('pic_unit a','data_lapor.id_pic = a.id_pic');
        $this->db->join('pic_unit b','data_lapor.id_pic2 = b.id_pic');
        $this->db->join('grup_provider','data_lapor.id_gprov = grup_provider.id_gprov');
        $this->db->where('id',$id);
        $query = $this->db->get();
        return $query->result_array();
         
        }

    function uprovlist($id_gprov){
        $this->db->select('*');
        $this->db->from('user_provider');
        $this->db->join('grup_provider as gprov','user_provider.id_gprov = gprov.id_gprov');
        $this->db->where('gprov.id_gprov',$id_gprov);
        $query = $this->db->get();
        return $query->result_array();
         
        }


}

?>