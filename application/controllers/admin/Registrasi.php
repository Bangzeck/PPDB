<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrasi extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Registrasi');
        $this->load->library('form_validation');
    }
    

	public function index(){

        $session = $this->session->userdata('login'); 
        if($session != 'login'){
            $this->load->view('pages/login');
        }else{ 
            $data["registrasi"] = $this->M_Registrasi->getAll();
            $this->load->view("admin/_partials/header");
            $this->load->view("admin/_partials/navbar");
            $this->load->view("admin/siswa/registrasi", $data); 
            $this->load->view("admin/_partials/footer.php");
            $this->load->view("admin/_partials/modal");
            $this->load->view("admin/_partials/js.php");
        }
        
    }
    

	
	public function add()
    {
        $registrasi = $this->M_Registrasi;
        $validation = $this->form_validation;
        $validation->set_rules($registrasi->rules());

        if ($validation->run()) {
            $registrasi->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

		$this->load->view("templates/header");
		$this->load->view("pages/registrasi");
		$this->load->view("templates/modal");
		$this->load->view("templates/footer");
        
    }



}




	