<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Email');
        $this->load->library('form_validation');
    }

	public function index($page = 'email'){
        $session = $this->session->userdata('login'); 
        if($session != 'login'){
            $this->load->view('admin/login');
        }else{ 
            $data["jumlahPesan"] = $this->M_Email->jumlahPesan();
            $data["email"] = $this->M_Email->getAll();
            
                $this->load->view("admin/_partials/header");
                $this->load->view("admin/_partials/navbar");
                $this->load->view("admin/".$page, $data);
                $this->load->view("admin/_partials/footer.php");
                $this->load->view("admin/_partials/modal");
                $this->load->view("admin/_partials/js.php");
          
        
        }
    }

    public function kirim()
    {
        $session = $this->session->userdata('login');
        if($session != 'login'){
            redirect(site_url('admin/login'));
        }else{
            $email = $this->M_Email;;
            $validation = $this->form_validation;
            $validation->set_rules($email->rules());

            if($validation->run()){
                $email->send();
                $this->session->set_flashdata('success', 'Berhasil Di simpan');
            }
                redirect(base_url());

                
        }
    }

    function delete_multiple() {
        $this->load->model('M_Email');
        $this->M_Email->remove_checked_email();
        redirect('admin/email');
    }
}
