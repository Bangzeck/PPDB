<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Maps extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Maps');
        $this->load->library('session');
	}

	public function index(){
        $session = $this->session->userdata('login'); 
        if($session != 'login'){
            $this->load->view('pages/login');
        }else{
            $data["maps"] = $this->M_Maps->getAll();
            $this->load->view("admin/_partials/header");
            $this->load->view("admin/_partials/navbar");
            $this->load->view("admin/maps", $data);
            $this->load->view("admin/_partials/js");
            $this->load->view("admin/_partials/footer");
            $this->load->view("admin/_partials/modal");
        }
    }

    public function update()
    {
        $session = $this->session->userdata('login');

        if ($session != 'login') {
            redirect(site_url('admin/login'));
        }else{
            $data = array(
                'link' => $this->input->post('link'),
                'height' => $this->input->post('height'),
                'width' => $this->input->post('width')
            );

            $this->M_Maps->updateMaps($data);
            $this->session->set_flashdata('maps', 'Maps Berhasil di update');

            redirect(site_url('admin/maps'));
        }

    }



  



    
}
