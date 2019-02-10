<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_Sekolah extends CI_Model
{
    private $_table = "db_sekolah";

    public $id;     
    public $alamat;
    public $nama;
    public $nomor;
    public $email;
    
   

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


    public function updateSekolah()
    {
        $post = $this->input->post();

        $this->nama = $post["nama"];
        $this->alamat = $post["alamat"];
        $this->nomor = $post["nomor"];
        $this->email = $post["email"];
        
        $this->db->where('id',0);
        $this->db->update($this->_table, $this);
    }


    // function updateSekolah($data)
    // {
    //     $this->db->where('id', 1);
    //     $this->db->update('db_sekolah', $data);
    // }


 


  


    
      
}

