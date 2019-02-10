<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_Accept extends CI_Model
{
    private $_table = "db_data_siswa";


    public $status_pendaftaran;
 
    

    // Diterima atau Ditolak

    // public function klikTerima()
    // {
    //    $post =  $this->input->post();
    //    $this->status_pendaftaran = $post["status_pendaftaran"];
    //    $this->db->update($this->_table, $this, array('id' => $post['id']));
    // }

    public function klikTerima($id)
    {
        $this->db->where("id", $id);
        $query = $this->db->get("db_data_siswa");
        return $query;
    }
    
      
}
