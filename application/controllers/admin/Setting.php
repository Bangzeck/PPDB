<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Setting');
        $this->load->model('M_Profil');
        $this->load->model('M_Setting_Daftar');
        $this->load->library('form_validation');
        $this->load->library('session');
	}

	public function index(){
        $session = $this->session->userdata('login'); 
        if($session != 'login'){
            $this->load->view('pages/login');
        }else{
            $data["setting"] = $this->M_Setting->getAll();
            $data["sekolah"] = $this->M_Profil->getAll();
            $this->load->view("admin/_partials/header");
            $this->load->view("admin/_partials/navbar");
            $this->load->view("admin/setting", $data);
            $this->load->view("admin/_partials/js");
            $this->load->view("admin/_partials/footer");
            $this->load->view("admin/_partials/modal");
        }
    }

    public function editPengumuman()
    {
        $session = $this->session->userdata('login'); 
        if($session != 'login'){
            redirect(site_url('admin/login'));
        }else{ 
         $data = array (
             'pengumuman' => $this->input->post('pengumuman'),
             'daftar' => $this->input->post('daftar')
            );
         $this->M_Setting->updatePengumuman($data); 
         $this->session->set_flashdata('pengumuman', 'Pengumuman dan daftar sudah di update');
         
         redirect(site_url('admin/setting'));
        
        }
    }

    public function editSekolah()
    {
        $session = $this->session->userdata('login'); 
        if($session != 'login'){
            redirect(site_url('admin/login'));
        }else{ 
         $data = array (
             'nama' => $this->input->post('nama'),
             'email' => $this->input->post('email'),
             'nomor' => $this->input->post('nomor'),
             'alamat' => $this->input->post('alamat'),
             'pengumuman' => $this->input->post('pengumuman')
            );
         $this->M_Profil->updateSekolah($data); 
         $this->session->set_flashdata('sekolah', 'Data sudah diupdate');
         
         redirect(site_url('admin/setting'));
        
        }
    }



    public function editPageDaftar()
    {   
        $session = $this->session->userdata('login'); 
        if($session != 'login'){
            redirect(site_url('admin/login'));
        }else{ 

            $data["pageDaftar"] = $this->M_Setting_Daftar->getAll();

            $this->load->view("admin/_partials/header");
            $this->load->view("admin/_partials/navbar");
            $this->load->view("admin/settingDaftar", $data);
            $this->load->view("admin/_partials/js.php");
            $this->load->view("admin/_partials/footer.php");
            $this->load->view("admin/_partials/modal");              
        }        
    }

    public function updatePageDaftar($id)
	{
        $row = $this->M_Berita->getById($id);
        
		if ($_FILES AND $_FILES['gambar']['name']) {
				$config = array(
						'upload_path' => './upload/berita/',
						'allowed_types' => 'gif|jpg|png|jpeg|bmp',
						'max_size' => '2048',
						'max_width' => '2000',
						'max_height' => '2000'
				);
                $this->load->library('upload', $config);           
				if (!$this->upload->do_upload('gambar')) {
                        redirect(site_url('admin/berita'));
				} else {

						unlink('upload/berita/'.$row->gambar);
						$file = $this->upload->data();
						$id = $this->input->post('id');
						$data = array(
                                'judul' => $this->input->post('judul'),
                                'isi' => $this->input->post('isi'),
								'gambar' => $this->input->post('gambar'),
								'gambar' => $file['file_name'],
						);
                        $this->M_Berita->update($id, $data);
                        // var_dump($file);;
                        // exit;
				}
		}
		else {
                unlink('upload/berita/'.$row->gambar);
				$id = $this->input->post('id');
				$data = array(
                        'judul' => $this->input->post('judul'),
                        'isi' => $this->input->post('isi'),
						'gambar' => $this->input->post('gambar'),
				);
                $this->M_Setting_Daftar->update($id, $data);         
		}
        redirect(site_url('admin/berita'));
	}

    
}
