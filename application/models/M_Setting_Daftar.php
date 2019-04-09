<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_Setting_Daftar extends CI_Model
{
    private $_table = "db_setting_daftar";

    public $id;
    public $gambar;
    public $nomor_rekening;
    public $nama_rekenging;

   

    // Mengambil semua data

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function update($id, $data)
    {   
        $post = $this->input->post();     
        $this->judul = $post["judul"];
        $this->isi = $post["isi"];
        $this->db->where('id', $id);
        $this->db->update($this->_table, $data);
    }



    

  


    
      
}

