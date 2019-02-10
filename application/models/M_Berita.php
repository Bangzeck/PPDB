<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_Berita extends CI_Model
{
    private $_table = "db_berita";

    
    public $judul;
    public $isi;
    public $tanggal;

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
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        
        $this->judul = $post["judul"];
        $this->isi = $post["isi"];
    
        $this->db->update($this->_table, $this, array('id' => $post['id']));
    }


    public function id($id)
    {
        $this->db->where('id', $id);
        return $query= $this->db->get($this->_table)->result();

    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id" => $id));
    }

}
