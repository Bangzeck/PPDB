<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengumuman extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Pengumuman');
        $this->load->library('form_validation');
    }

	public function index(){
        $session = $this->session->userdata('login'); 
        if($session != 'login'){
            $this->load->view('pages/login');
        }else{ 
            $data["getpengumuman"] = $this->M_Pengumuman->getAll();
            $this->load->view("admin/_partials/header");
            $this->load->view("admin/_partials/navbar");
            $this->load->view("admin/pengumuman", $data);
            $this->load->view("admin/_partials/footer.php");
            $this->load->view("admin/_partials/modal");
            $this->load->view("admin/_partials/js.php");
        }
    }

    public function add()
    {   
        $session = $this->session->userdata('login'); 
        if($session != 'login'){
            redirect(site_url('admin/login'));
        }else{ 
            $data = $this->M_Pengumuman;
            $validation = $this->form_validation;
            $validation->set_rules($data->rules());

            if ($validation->run()) {
                $data->save();
                $this->session->set_flashdata('success', 'Berhasil disimpan');
            }
                $this->load->view("admin/_partials/header");
                $this->load->view("admin/_partials/navbar");
                $this->load->view("admin/pengumuman");
                $this->load->view("admin/_partials/js.php");
                $this->load->view("admin/_partials/footer.php");
                $this->load->view("admin/_partials/modal");

        }
        
            
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->M_Pengumuman->delete($id)) {
            redirect(site_url('admin/pengumuman'));
        }
    }
}
