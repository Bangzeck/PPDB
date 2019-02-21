<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('M_Daftar');
        $this->load->model('M_Kode');
    }

    public function cek_login() {
        $kode = $this->security->xss_clean($this->input->post("kode"));
        $cek = $this->M_Daftar->cek_user($kode);
        if(count($cek) == 1){
                $this->session->set_userdata(array(
                    'kode'      => $cek[0]['kode'],
            ));
                $data["code"]= $this->M_Daftar->kode($kode);
                $this->load->view('templates/header');
                $this->load->view('daftar/daftar', $data);
                $this->load->view('templates/modal');
                $this->load->view('templates/footer');
        }else{
            echo "NISN Belum Di aktifkan / Tidak Terdaftar";


        }  
    }





}