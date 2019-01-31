<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_Email extends CI_Model
{
    private $_table = "db_email";

    public $nama;
    public $email;
    public $subjek;
    public $pesan;

    public function rules()
    {
        return[
            ['field' => 'nama',
            'label' => 'Nama',
            'rules' => 'required'],

            ['field' => 'email',
            'label' => 'Email',
            'rules' => 'required'],

            ['field' => 'pesan',
            'label' => 'Pesan',
            'rules' => 'required']
        ];
    }


    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function send()
    {
        $post = $this->input->post();
        $this->nama = $post['nama'];
        $this->email = $post['email'];
        $this->subjek = $post['subjek'];
        $this->pesan = $post['pesan'];
        $this->db->insert($this->_table, $this);
        
    }

    public function jumlahPesan(){
        $sql = "SELECT count(id) as id FROM db_email";
        $result = $this->db->query($sql);
        return $result->row()->id;
    }

    function remove_checked_email() {
		$action = $this->input->post('action');
		if ($action == "delete") {
			$delete = $this->input->post('msg');
			for ($i=0; $i < count($delete) ; $i++) { 
				$this->db->where('id', $delete[$i]);
				$this->db->delete('db_email');
			}
		}
    }


}