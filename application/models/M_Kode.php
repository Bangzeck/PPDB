<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_Kode extends CI_Model
{
    private $_table = "db_kode_form";


    public $kode;

    public function rules()
    {
        return [
            ['field' => 'kode',
            'label' => 'Kode',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }


    function cek_kode($kode){
        $this->db->where('kode',$kode);
        $query = $this->db->get('db_kode_form');
        return $query->result_array();
    }

    public function codeInsert()
    {  
        $post = $this->input->post();
        $this->kode = $post["kode"];
        $this->db->insert($this->_table, $this);
    }


    public function delete($id)
    {   
        return $this->db->delete($this->_table, array("id" => $id));
    }


}