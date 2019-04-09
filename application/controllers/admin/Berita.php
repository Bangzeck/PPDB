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
            $this->load->view("admin/_partials/modal",$data);
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


    public function edit($id)
    {   
      
        $session = $this->session->userdata('login'); 
        if($session != 'login'){
            redirect(site_url('admin/login'));
        }else{ 
            $id=$this->uri->segment(4);
            $data["editBerita"] = $this->M_Berita->id($id);

            $this->load->view("admin/_partials/header");
            $this->load->view("admin/_partials/navbar");
            $this->load->view("admin/berita/editBerita", $data);
            $this->load->view("admin/_partials/js.php");
            $this->load->view("admin/_partials/footer.php");
            $this->load->view("admin/_partials/modal");              
        }        
    }
    
    public function update($id)
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
                $this->M_Berita->update($id, $data);         
		}
        redirect(site_url('admin/berita'));
	}



    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->M_Berita->delete($id)) {
            redirect(site_url('admin/berita'));
        }
    }
}