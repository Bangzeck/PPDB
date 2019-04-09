<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_Daftar extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    public function kode($kode)
    {   
        $this->db->where('kode', $kode);
        return $query= $this->db->get('db_kode_form')->result();

    }
    function cek_user($kode){
        $this->db->where('kode',$kode);
        $query = $this->db->get('db_kode_form');
        return $query->result_array();
    }

    function cek_siswa($kode){
        $this->db->select('nisn');
        $this->db->where('nisn',$kode);
        $query = $this->db->get('db_data_siswa');
        return $query->result_array();
    }

}