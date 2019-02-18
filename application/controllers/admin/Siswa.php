<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Siswa');
        $this->load->model('M_Accept');
        $this->load->library('form_validation');
    }

    public function index($page = 'list_siswa'){
        $session = $this->session->userdata('login'); 
        if($session != 'login'){
            $this->load->view('admin/login');
        }else{ 
            $data["siswa"] = $this->M_Siswa->getAll();
            $this->load->view("admin/_partials/header");
            $this->load->view("admin/_partials/navbar");
            $this->load->view("admin/siswa/".$page, $data);
            $this->load->view("admin/_partials/footer.php");
            $this->load->view("admin/_partials/modal");
            $this->load->view("admin/_partials/js.php");
        }
    }

    // Tambah yang dilakukan admin

    public function add()
    {   
        $session = $this->session->userdata('login'); 
        if($session != 'login'){
            redirect(site_url('admin/login'));
        }else{ 
            $data_siswa = $this->M_Siswa;
            $validation = $this->form_validation;
            $validation->set_rules($data_siswa->rules());

            if ($validation->run()) {
                $data_siswa->save();
                $this->session->set_flashdata('success', 'Berhasil disimpan');
                redirect(site_url('admin/siswa'));
            }

                $this->load->view("admin/_partials/header");
                $this->load->view("admin/_partials/navbar");
                $this->load->view("admin/siswa/tambah_siswa");
                $this->load->view("admin/_partials/js.php");
                $this->load->view("admin/_partials/footer.php");
                $this->load->view("admin/_partials/modal");

        }
            
    }
        

    // Tambah yang dilakukan peserta

    public function addPeserta()
    {   $session = $this->session->userdata('login'); 
        if($session != 'login'){
            $this->load->view('pages/login');
        }else{
            $data_siswa = $this->M_Siswa;
            $validation = $this->form_validation;
            $validation->set_rules($data_siswa->rules());
    
            if ($validation->run()) {
                $data_siswa->save();
                $this->session->set_flashdata('success', 'Berhasil disimpan');
            }
            
            redirect(site_url('daftar_nisn'));
                             
        }
        
        
        
    }



    public function detailSiswa()
     {  
        $session = $this->session->userdata('login'); 
        if($session != 'login'){
            $this->load->view('pages/login');
        }else{
                $data = $this->M_Siswa;
                $validation = $this->form_validation;
                $validation->set_rules($data->rules());
    
                $id=$this->uri->segment(4);
                $data->detailSiswa = $this->M_Siswa->id($id);
                $data->average = $this->M_Siswa->average($id);
                if ($validation->run()) {
                    $data->update();
                    $this->session->set_flashdata('success', 'Berhasil disimpan');
                    redirect(site_url('admin/siswa'));
                }   
                    $data->siswa = $this->M_Siswa->id($id);
                    $this->load->view("admin/_partials/header");
                    $this->load->view("admin/_partials/navbar");
                    $this->load->view("admin/siswa/detailSiswa", $data);
                    $this->load->view("admin/_partials/js.php");
                    $this->load->view("admin/_partials/footer.php");
                    $this->load->view("admin/_partials/modal");                   
        }
     }

    public function diterima()
    {
        $session = $this->session->userdata('login'); 
        if($session != 'login'){
            $this->load->view('pages/login');
        }else{ 
            $data["diterima"] = $this->M_Siswa->getDiterima();
            $this->load->view("admin/_partials/header");
            $this->load->view("admin/_partials/navbar");
            $this->load->view("admin/siswa/diterima", $data);
            $this->load->view("admin/_partials/footer.php");
            $this->load->view("admin/_partials/modal");
            $this->load->view("admin/_partials/js.php");
    
        }
    }

    public function ditolak()
	{
		$session = $this->session->userdata('login'); 
        if($session != 'login'){
            $this->load->view('pages/login');
        }else{ 
            $data["ditolak"] = $this->M_Siswa->getDitolak();
            $this->load->view("admin/_partials/header");
            $this->load->view("admin/_partials/navbar");
            $this->load->view("admin/siswa/ditolak", $data);
            $this->load->view("admin/_partials/footer.php");
            $this->load->view("admin/_partials/modal");
            $this->load->view("admin/_partials/js.php");
    
        }
    }
    
    public function belom_verifikasi()
	{
		$session = $this->session->userdata('login'); 
        if($session != 'login'){
            $this->load->view('pages/login');
        }else{ 
            $data["verifikasi"] = $this->M_Siswa->getVerifikasi();
            $this->load->view("admin/_partials/header");
            $this->load->view("admin/_partials/navbar");
            $this->load->view("admin/siswa/belom_verifikasi", $data);
            $this->load->view("admin/_partials/footer.php");
            $this->load->view("admin/_partials/modal");
            $this->load->view("admin/_partials/js.php");
    
        }
    }


    
    
    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->M_Siswa->delete($id)) {
            redirect(site_url('admin/siswa'));
        }
    }
}