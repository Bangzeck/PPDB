<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Siswa');
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
            // $this->load->view('admin/login');
            redirect(site_url('admin/login'));
        }else{ 
            $data_siswa = $this->M_Siswa;
            $validation = $this->form_validation;
            $validation->set_rules($data_siswa->rules());

            if ($validation->run()) {
                $data_siswa->save();
                $this->session->set_flashdata('success', 'Berhasil disimpan');
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
    {
        $data_siswa = $this->M_Siswa;
        $validation = $this->form_validation;
        $validation->set_rules($data_siswa->rules());

        if ($validation->run()) {
            $data_siswa->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        redirect(site_url('pages/view'));
		
        
        
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/data_siswa');
       
        $data_siswa = $this->M_Siswa;
        $validation = $this->form_validation;
        $validation->set_rules($data_siswa->rules());

        if ($validation->run()) {
            $data_siswa->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["data_siswa"] = $data_siswa->getById($id);
        if (!$data["data_siswa"]) show_404();
        
        $this->load->view("admin/_partials/header");
        $this->load->view("admin/_partials/navbar");
        $this->load->view("admin/data_siswa/edit", $data);
        $this->load->view("admin/_partials/scrolltop.php");
        $this->load->view("admin/_partials/modal.php");
        $this->load->view("admin/_partials/js.php");
        $this->load->view("admin/_partials/footer.php");
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