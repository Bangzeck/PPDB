<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('M_Daftar');
        $this->load->model('M_Kode');
    }

    public function index(){
        $session = $this->session->userdata('kode'); 
        if($session != 'kode'){
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
                'kode'      => $cek[0]['kode'],
            ));
            
            redirect('daftar', $kode);
        }else{
            echo "NISN Belum Di aktifkan / Tidak Terdaftar";


        }

        
    }





}