<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('M_Login');
        $this->load->library('session');
    }
    public function index(){
        $session = $this->session->userdata('login'); 
        if($session != 'login'){
            $this->load->view('pages/login');
        }else{
            redirect('admin');
        }
    }
    public function cek_login() {
        $username = $this->security->xss_clean($this->input->post("username"));
        $password = $this->security->xss_clean($this->input->post("password"));
        
        $cek = $this->M_Login->cek_user($username,($password));
        if(count($cek) == 1){
            $this->session->set_userdata(array(
                'login'         => "login",
                'username'      => $cek[0]['username'],
            ));
            redirect('admin');
        }else{
            $this->session->set_flashdata('login', 'Password atau e-mail Anda salah');
            redirect('admin/login');
        }
    }
    public function logout(){
        $this->session->sess_destroy();
        redirect('admin/login','refresh');
    }
}
