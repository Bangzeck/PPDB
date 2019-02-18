<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_Berita extends CI_Model
{
    private $_table = "db_berita";

    
    public $judul;
    public $isi;
    public $tanggal;
    public $gambar;

    public function rules()
    {
        return [
            ['field' => 'judul',
            'label' => 'Judul',
            'rules' => 'required'],

            ['field' => 'isi',
            'label' => 'Isi',
            'rules' => 'required']

        ];
    }

    public function getAll()
    {   
        $this->db->from($this->_table);
        $this->db->order_by("tanggal", "desc");
        $query = $this->db->get(); 
        return $query->result();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->judul = $post["judul"];
        $this->isi = $post["isi"];
        $this->gambar = $this->_uploadImage();
        $this->db->insert($this->_table, $this);
    }


    private function _uploadImage()
    {
        $config['upload_path']          = './upload/berita/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['overwrite']			= true;
        $config['max_size']             = 1024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

            if ($this->upload->do_upload('gambar')) {
                return $this->upload->data("file_name");
            }
    
    }

    public function update()
    {
        $post = $this->input->post();
        
        $this->judul = $post["judul"];
        $this->isi = $post["isi"];
        $this->gambar = $this->_uploadImage();
        
        $this->db->update($this->_table, $this, array('id' => $post['id']));
    }


    public function id($id)
    {
        $this->db->where('id', $id);
        return $query= $this->db->get($this->_table)->result();

    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
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
            return array_map('unlink', glob(FCPATH."upload/berita/$filename.*"));
        }
    }

}
