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
                $this->load->view("admin/_partials/navbar", $data);
                $this->load->view("admin/".$page, $data);
                $this->load->view("admin/_partials/footer.php");
                $this->load->view("admin/_partials/modal");
                $this->load->view("admin/_partials/js.php");
          
        
        }
    }

    public function kirim()
    {
        $email = $this->M_Email;;
        $validation = $this->form_validation;
        $validation->set_rules($email->rules());

        if($validation->run()){
            $email->send();
            $this->session->set_flashdata('success', 'Berhasil Di simpan');
        }
            redirect(base_url());
    }

    public function detailEmail()
    {   
        $session = $this->session->userdata('login'); 
        if($session != 'login'){
            $this->load->view('admin/login');
        }else{ 
            $id=$this->uri->segment(4);
            $data["jumlahPesan"] = $this->M_Email->jumlahPesan();   
            $data["detailEmail"] = $this->M_Email->id($id);
            $this->load->view("admin/_partials/header");
            $this->load->view("admin/_partials/navbar", $data);
            $this->load->view("admin/detailEmail", $data);
            $this->load->view("admin/_partials/footer.php");
            $this->load->view("admin/_partials/modal");
            $this->load->view("admin/_partials/js.php");
          
        
        }
        
    }  

    public function tulisBalas()
    {   
        $session = $this->session->userdata('login'); 
        if($session != 'login'){
            $this->load->view('pages/login');
        }else{
            $id=$this->uri->segment(4);
            $data["detailEmail"] = $this->M_Email->id($id);
            $data["getEmail"] = $this->M_Email->getEmail($id);
            $this->load->view("admin/_partials/header");
            $this->load->view("admin/_partials/navbar");
            $this->load->view("admin/balasEmail", $data);
            $this->load->view("admin/_partials/footer.php");
            $this->load->view("admin/_partials/modal");
            $this->load->view("admin/_partials/js.php");
        }  
    }

    public function balas()
    {   
        $emailDari = $this->input->post('emailDari');
        $pass = $this->input->post('password');
        $emailKepada = $this->input->post('emailKepada');
        $subjek = $this->input->post('subjek');
        $konten = $this->input->post('konten');

        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => $emailDari,
            'smtp_pass' => $pass,
            'mailtype' => 'html',
            'charset' => 'iso-8859-1',
        );
        

        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");
        $this->email->from($emailDari, 'SMK Bina Utama');
        $this->email->to($emailKepada);
        $this->email->subject($subjek);
        $this->email->message($konten);
        
        $this->email->send();

        redirect(site_url('admin/email'));

        


    }

    function delete_multiple() {
        $this->load->model('M_Email');
        $this->M_Email->remove_checked_email();
        redirect('admin/email');
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->M_Email->delete($id)) {
            redirect(site_url('admin/email'));
        }
    }
}
