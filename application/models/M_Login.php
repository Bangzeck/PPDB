<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_Login extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    function cek_user($username,$password){

        $this->db->where('username',$username);
        $this->db->where('password_user',$password);
        $query = $this->db->get('db_user');
        return $query->result_array();

        
    }
    
}