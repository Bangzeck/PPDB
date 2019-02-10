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


    public function codeInsert()
    {  
        $post = $this->input->post();
        $this->kode = $post["kode"];
        $this->db->insert($this->_table, $this);
    }


}