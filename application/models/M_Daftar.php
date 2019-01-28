<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_Daftar extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    function cek_user($kode){
        $this->db->where('kode',$kode);
        $query = $this->db->get('db_kode_form');
        return $query->result_array();
    }

}