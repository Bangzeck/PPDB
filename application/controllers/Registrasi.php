<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrasi extends CI_Controller {

	public function index()
	{
		$this->load->view('pages/registrasi');
    }
    

	public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Registrasi');
        $this->load->library('form_validation');
        $this->load->helper('url');
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




	