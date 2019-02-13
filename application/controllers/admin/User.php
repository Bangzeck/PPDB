<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('M_User');
        $this->load->library('form_validation');
	}

	public function index(){
        $session = $this->session->userdata('login'); 
        if($session != 'login'){
            $this->load->view('pages/login');
        }else{
            $data["user"] = $this->M_User->getAll();
            $this->load->view("admin/_partials/header");
            $this->load->view("admin/_partials/navbar");
            $this->load->view("admin/user", $data);
            $this->load->view("admin/_partials/js");
            $this->load->view("admin/_partials/footer");
            $this->load->view("admin/_partials/modal");
        }
    }

    public function editUser()
    {
        $session = $this->session->userdata('login'); 
        if($session != 'login'){
            redirect(site_url('admin/login'));
        }else{ 
         $data = array (
             'nama_lengkap' => $this->input->post('nama_lengkap'),
             'username' => $this->input->post('username'),
             'email' => $this->input->post('email'),
             'password' => $this->input->post('password')
            );
         $this->M_User->updateUser($data);  
         
         redirect(site_url('admin/user'));
        
        }
    }

    
}
