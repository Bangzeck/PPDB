<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Setting');
        $this->load->model('M_Sekolah');
        $this->load->library('form_validation');
	}

	public function index(){
        $session = $this->session->userdata('login'); 
        if($session != 'login'){
            $this->load->view('pages/login');
        }else{
            $data["setting"] = $this->M_Setting->getAll();
            $data["sekolah"] = $this->M_Sekolah->getAll();
            $this->load->view("admin/_partials/header");
            $this->load->view("admin/_partials/navbar");
            $this->load->view("admin/setting", $data);
            $this->load->view("admin/_partials/js");
            $this->load->view("admin/_partials/footer");
            $this->load->view("admin/_partials/modal");
        }
    }

    public function editPengumuman()
    {
        $session = $this->session->userdata('login'); 
        if($session != 'login'){
            redirect(site_url('admin/login'));
        }else{ 
         $data = array (
             'pengumuman' => $this->input->post('pengumuman'),
             'daftar' => $this->input->post('daftar')
            );
         $this->M_Setting->updatePengumuman($data);  
         
         redirect(site_url('admin/setting'));
        
        }
    }

    public function editSekolah()
    {
        $session = $this->session->userdata('login'); 
        if($session != 'login'){
            redirect(site_url('admin/login'));
        }else{ 
         $data = array (
             'nama' => $this->input->post('nama'),
             'email' => $this->input->post('email'),
             'nomor' => $this->input->post('nomor'),
             'alamat' => $this->input->post('alamat')
            );
         $this->M_Sekolah->updateSekolah($data);  
         
         redirect(site_url('admin/setting'));
        
        }
    }

    
}
