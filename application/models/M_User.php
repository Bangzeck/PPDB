<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_User extends CI_Model
{
    private $_table = "db_user";
   

    // Mengambil semua data

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
  
    public function updateUser($id)
    {   
        $this->load->library('encryption');
        $this->load->library('encrypt');

        $post = $this->input->post();

        $this->nama_lengkap = $post["nama_lengkap"];
        $this->username = $post["username"];
        $this->email = $post["email"];
        $this->password_user = md5($post["password_user"]);
        $this->password_email = $this->encryption->encrypt($post["password_email"]);
        
        // var_dump($this->password_user);
        // exit;

        $this->db->where('id',0);
        $this->db->update($this->_table, $this);
    }

      
}
