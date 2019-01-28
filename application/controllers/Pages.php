<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {
        
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Pengumuman');
        $this->load->library('form_validation');
    }
    
    public function view($page = 'home')
    {
        if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }
        $data["pengumuman"] = $this->M_Pengumuman->getAll();
        $data['title'] = ucfirst($page); // Capitalize the first letter
        $this->load->view('templates/header', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/modal', $data);
        $this->load->view('templates/footer', $data);
        

     }


     public function readmore()
     {  
        $id=$this->uri->segment(3);
        $data["readmore"] = $this->M_Pengumuman->id($id);
        $this->load->view('templates/header');
        $this->load->view('pages/readmore', $data);
        $this->load->view('templates/modal');
        $this->load->view('templates/footer');
     }

}