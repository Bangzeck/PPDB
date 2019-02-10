<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('M_Daftar');
    }
    public function index(){
        $session = $this->session->userdata('login'); 
        if($session != 'login'){
            $this->load->view('pages/daftar_nisn');
        }else{
            redirect('daftar');
        }
        
    }
    public function cek_login() {
        $kode = $this->security->xss_clean($this->input->post("kode"));
        $cek = $this->M_Daftar->cek_user($kode);
        if(count($cek) == 1){
            $this->session->set_userdata(array(
                'kode'         => "kode",
                'kode'      => $cek[0]['kode'],
            ));
            
            redirect('daftar');
        }else{
            echo "NISN Belum Di aktifkan / Tidak Terdaftar";

        }
    }




}
