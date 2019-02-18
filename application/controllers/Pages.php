<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {
        
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Berita');
        $this->load->model('M_Kode');
        $this->load->model('M_Setting');
        $this->load->model('M_Sekolah');
        $this->load->model('M_Siswa');
        $this->load->library('form_validation');
    }
    
    public function view($page = 'home')
    {
        if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }
        $data["berita"] = $this->M_Berita->getAll();
        $data['title'] = ucfirst($page); // Capitalize the first letter

        $data["sekolah"] = $this->M_Sekolah->getAll();
        $data["pengumuman"] = $this->M_Setting->getPengumuman();
        $data["daftar"] = $this->M_Setting->getDaftar();

        $this->load->view('templates/header', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/modal', $data);
        $this->load->view('templates/footer', $data);
        

     }


     public function readmore()
     {  
        $id=$this->uri->segment(3);
        $data["readmore"] = $this->M_Berita->id($id);
        
        $this->load->view('templates/header');
        $this->load->view('pages/readmore', $data);
        $this->load->view('templates/modal');
        $this->load->view('templates/footer');
     }



     public function detailPengumuman() {
        $nisn = $this->security->xss_clean($this->input->post("nisn"));
        $cek = $this->M_Siswa->cek_user($nisn);
        if(count($cek) == 1){
            $this->session->set_userdata(array(
                'nisn'         => "nisn",
                'nisn'      => $cek[0]['nisn'],
            ));
            
            $data["detailPengumuman"] = $this->M_Siswa->nisn($nisn);
            $this->load->view('templates/header');
            $this->load->view('pages/detailPengumuman', $data);
            $this->load->view('templates/modal');
            $this->load->view('templates/footer');
            
        }else{
            $this->load->view('templates/header');
            $this->load->view('pages/terdaftar');
            $this->load->view('templates/modal');
            $this->load->view('templates/footer');

        }
    }

    public function cetak()
    {   
        $nisn=$this->uri->segment(3);
        $data["detailPengumuman"] = $this->M_Siswa->nisn($nisn);
        $this->load->view('pages/cetakPengumuman', $data);
        $this->load->view('templates/modal');
        $this->load->view('templates/footer');
    }

    

    

}