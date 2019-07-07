<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_Setting extends CI_Model
{
    private $_table = "db_setting";

    public $id;
    public $pengumuman;
    public $daftar;

   

    // Mengambil semua data

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    // Mengambil semua data berdasarkan id
    public function id($id)
    {
        $this->db->where('id', $id);
        return $query= $this->db->get($this->_table)->result();

    }

    public function updatePengumuman()
    {
        $post = $this->input->post();

        $this->pengumuman = $post["pengumuman"];
        $this->daftar = $post["daftar"];
        $this->db->where('id',0);
        $this->db->update($this->_table, $this);
    }

    public function getPengumuman(){
        $sql = "SELECT pengumuman  FROM db_setting";
        $result = $this->db->query($sql);
        return $result->row()->pengumuman;
    }

    public function getDaftar(){
        $sql = "SELECT daftar  FROM db_setting";
        $result = $this->db->query($sql);
        return $result->row()->daftar;
    }



  


    
      
}

