<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrasi extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Registrasi');
        $this->load->model('M_Kode');
        $this->load->library('form_validation');
        $this->load->helper('form', 'url');
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
            $this->load->view("admin/_partials/modal", $data);
            $this->load->view("admin/_partials/js.php");

            // var_dump($data);
            // exit;
        }
        
    }

    public function getAktif(){

        $session = $this->session->userdata('login'); 
        if($session != 'login'){
            $this->load->view('pages/login');
        }else{ 
            $data["registrasi"] = $this->M_Registrasi->getAktif();
            $this->load->view("admin/_partials/header");
            $this->load->view("admin/_partials/navbar");
            $this->load->view("admin/siswa/registrasi", $data); 
            $this->load->view("admin/_partials/footer.php");
            $this->load->view("admin/_partials/modal", $data);
            $this->load->view("admin/_partials/js.php");

            // var_dump($data);
            // exit;
        }
        
    }


    public function getNonAktif(){

        $session = $this->session->userdata('login'); 
        if($session != 'login'){
            $this->load->view('pages/login');
        }else{ 
            $data["registrasi"] = $this->M_Registrasi->getNonAktif();
            $this->load->view("admin/_partials/header");
            $this->load->view("admin/_partials/navbar");
            $this->load->view("admin/siswa/registrasi", $data); 
            $this->load->view("admin/_partials/footer.php");
            $this->load->view("admin/_partials/modal");
            $this->load->view("admin/_partials/js.php");

            // var_dump($data);
            // exit;
        }
        
    }

    public function detail()
     {  
        $session = $this->session->userdata('login'); 
        if($session != 'login'){
            $this->load->view('pages/login');
        }else{ 
        $id=$this->uri->segment(4);
        $data["detail"] = $this->M_Registrasi->id($id);
        $this->load->view("admin/_partials/header");
        $this->load->view("admin/_partials/navbar");
        $this->load->view('admin/siswa/detailRegsitasi', $data);
        $this->load->view("admin/_partials/footer");
        $this->load->view("admin/_partials/modal", $data);
        $this->load->view("admin/_partials/js");
        }
     }

     public function view_code()
     {  
        $session = $this->session->userdata('login'); 
        if($session != 'login'){
            $this->load->view('pages/login');
        }else{ 

        $data["code"] = $this->M_Kode->getAll();
        $this->load->view("admin/_partials/header");
        $this->load->view("admin/_partials/navbar");
        $this->load->view('admin/siswa/lihat_kode_form', $data);
        $this->load->view("admin/_partials/footer");
        $this->load->view("admin/_partials/modal", $data);
        $this->load->view("admin/_partials/js");
        }
     }


     public function addCode()
    {   $kode = $this->input->post('kode');
        $nisn = $this->input->post('nisn');
        $data = $this->M_Registrasi->getByNisn($kode);
        $this->load->library('form_validation');
        $this->form_validation->set_rules('kode', 'Kode','required|is_unique[db_kode_form.kode]');
        if($this->form_validation->run() == TRUE){
            $this->M_Kode->codeInsert($kode,'kode');
            $this->M_Registrasi->statusAktif($nisn,'nisn');
            redirect(site_url('admin/registrasi/getAktif'));
        }else{
            redirect(site_url('admin/registrasi/getNonAktif'));
        }
        

    }

    public function deleteCode()
    {   $kode = $this->input->post('kode');
        $nisn = $this->input->post('nisn');
        $data = $this->M_Registrasi->getByNisn($kode);
        $this->load->library('form_validation');
        $this->form_validation->set_rules('kode', 'Kode','required');
        if($this->form_validation->run() == TRUE){
            $this->M_Kode->delete($nisn);
            $this->M_Registrasi->statusNonAktif($nisn,'nisn');
            // var_dump($nisn);
            // exit;
            redirect(site_url('admin/registrasi/getNonAktif'));
        }else{
            redirect(site_url('admin/registrasi/getAktif'));
        }
        

    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        if ($this->M_Registrasi->delete($id)) {
            redirect(site_url('admin/registrasi'));
        }
    }

    



}




	