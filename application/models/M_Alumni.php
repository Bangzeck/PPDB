<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_Alumni extends CI_Model
{
    private $_table = "db_alumni";


    public $nama;
    public $titel;
    public $kutipan;
    public $gambar;

    public function rules()
    {
        return [
            ['field' => 'nama',
            'label' => 'Nama',
            'rules' => 'required'],

            ['field' => 'titel',
            'label' => 'Titel',
            'rules' => 'required'],

            ['field' => 'kutipan',
            'label' => 'Kutipan',
            'rules' => 'required']

        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    public function id($id)
    {
        $this->db->where('id', $id);
        return $query= $this->db->get($this->_table)->result();

    }
    
    public function save()
    {
        $post = $this->input->post();
        $this->nama = $post["nama"];
        $this->titel = $post["titel"];
        $this->kutipan = $post["kutipan"];
        $this->gambar = $this->_uploadImage();
        $this->db->insert($this->_table, $this);
    }


    private function _uploadImage()
    {
        $config['upload_path']          = './upload/alumni/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['overwrite']			= true;
        $config['max_size']             = 3072; // 3MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

            if ($this->upload->do_upload('gambar')) {
                return $this->upload->data("file_name");
            }
    
    }

    public function delete($id)
    {   $this->_deleteImage($id);
        return $this->db->delete($this->_table, array("id" => $id));
    }

    private function _deleteImage($id)
    {
        $foto = $this->getById($id);
        if ($foto->image != "default.jpg") {
            $filename = explode(".", $foto->gambar)[0];
            return array_map('unlink', glob(FCPATH."upload/alumni/$filename.*"));
        }
    }


    
      
}
