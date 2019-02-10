<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Berita');
        $this->load->library('form_validation');
    }

	public function index(){
        $session = $this->session->userdata('login'); 
        if($session != 'login'){
            $this->load->view('pages/login');
        }else{ 
            $data["berita"] = $this->M_Berita->getAll();
            $this->load->view("admin/_partials/header");
            $this->load->view("admin/_partials/navbar");
            $this->load->view("admin/berita/berita", $data);
            $this->load->view("admin/_partials/footer.php");
            $this->load->view("admin/_partials/modal");
            $this->load->view("admin/_partials/js.php");
        }
    }

    public function write()
    {   
        $session = $this->session->userdata('login'); 
        if($session != 'login'){
            $this->load->view('pages/login');
        }else{ 
            $this->load->view("admin/_partials/header");
            $this->load->view("admin/_partials/navbar");
            $this->load->view("admin/berita/tulisBerita");
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
            $data = $this->M_Berita;
            $validation = $this->form_validation;
            $validation->set_rules($data->rules());

            if ($validation->run()) {
                $data->save();
                $this->session->set_flashdata('success', 'Berhasil disimpan');
            }
                $this->load->view("admin/_partials/header");
                $this->load->view("admin/_partials/navbar");
                $this->load->view("admin/berita/tulisBerita");
                $this->load->view("admin/_partials/js.php");
                $this->load->view("admin/_partials/footer.php");
                $this->load->view("admin/_partials/modal");

        }

        redirect(site_url('admin/berita'));
        
            
    }


    public function edit()
    {   
        $session = $this->session->userdata('login'); 
        if($session != 'login'){
            redirect(site_url('admin/login'));
        }else{ 
            $data = $this->M_Berita;
            $validation = $this->form_validation;
            $validation->set_rules($data->rules());

            $id=$this->uri->segment(4);
            $data->editBerita = $this->M_Berita->id($id);

            if ($validation->run()) {
                $data->update();
                $this->session->set_flashdata('success', 'Berhasil disimpan');
                redirect(site_url('admin/berita'));
            }   
                $this->load->view("admin/_partials/header");
                $this->load->view("admin/_partials/navbar");
                $this->load->view("admin/berita/editBerita", $data);
                $this->load->view("admin/_partials/js.php");
                $this->load->view("admin/_partials/footer.php");
                $this->load->view("admin/_partials/modal");

                
        }
        
        
        
            
    }




    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->M_Berita->delete($id)) {
            redirect(site_url('admin/berita'));
        }
    }
}