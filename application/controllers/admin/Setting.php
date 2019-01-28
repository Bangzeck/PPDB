<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends CI_Controller {

	public function __construct()
    {
		parent::__construct();
	}

	public function index(){
        $session = $this->session->userdata('login'); 
        if($session != 'login'){
            $this->load->view('pages/login');
        }else{  
            $this->load->view("admin/_partials/header");
            $this->load->view("admin/setting");
            $this->load->view("admin/_partials/navbar");
            $this->load->view("admin/_partials/js");
            $this->load->view("admin/_partials/footer");
            $this->load->view("admin/_partials/modal");
        }
    }
}
