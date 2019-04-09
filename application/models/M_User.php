<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_User extends CI_Model
{
    private $_table = "db_user";
   

    // Mengambil semua data

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
  
    public function updateUser()
    {
        $post = $this->input->post();

        $this->nama_lengkap = $post["nama_lengkap"];
        $this->username = $post["username"];
        $this->email = $post["email"];
        $this->password = md5($post["password"]);
    
        $this->db->where('id',0);
        $this->db->update($this->_table, $this);
    }
    
      
}
