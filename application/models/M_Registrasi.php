<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_Registrasi extends CI_Model
{
    private $_table = "db_registrasi";

    public $nisn;
    public $nomor_registrasi;
    // public $gambar;
    public $email;

    public function rules()
    {
        return [
            ['field' => 'nisn',
            'label' => 'Nisn',
            'rules' => 'required'],

            ['field' => 'nomor_registrasi',
            'label' => 'Nomor_registrasi',
            'rules' => 'required'],
            
            ['field' => 'email',
            'label' => 'Email',
            'rules' => 'required']
        ];
    } 

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    
    public function save()
    {
        $post = $this->input->post();
        $this->nisn = $post["nisn"];
        $this->nomor_registrasi = $post["nomor_registrasi"];
        $this->email = $post["email"];
        $this->gambar = $this->_uploadImage();
        $this->db->insert($this->_table, $this);
    }
    

    private function _uploadImage()
    {
        $config['upload_path']          = './upload/product/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['overwrite']			= true;
        $config['max_size']             = 1024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('gambar')) {
            return $this->upload->data("file_name");
        }
    
        return "default.png";
    }

}