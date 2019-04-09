<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alumni extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Alumni');
        $this->load->library('form_validation');
    }

	public function index(){
        $session = $this->session->userdata('login'); 
        if($session != 'login'){
            $this->load->view('pages/login');
        }else{ 
            $data["alumni"] = $this->M_Alumni->getAll();
            $this->load->view("admin/_partials/header");
            $this->load->view("admin/_partials/navbar");
            $this->load->view("admin/alumni/alumni", $data);
            $this->load->view("admin/_partials/footer.php");
            $this->load->view("admin/_partials/modal",$data);
            $this->load->view("admin/_partials/js.php");
        }
    }

    public function tambah()
    {
        $session = $this->session->userdata('login');
        if($session != 'login'){
            $this->load->view('pages/login');
        }else{
            $this->load->view("admin/_partials/header");
            $this->load->view("admin/_partials/navbar");
            $this->load->view("admin/alumni/tambah_alumni");
            $this->load->view("admin/_partials/footer.php");
            $this->load->view("admin/_partials/modal");
            $this->load->view("admin/_partials/js.php");
        }
    }

    public function tambahAlumni()
    {   
        $session = $this->session->userdata('login'); 
        if($session != 'login'){
            redirect(site_url('admin/login'));
        }else{ 
            $data = $this->M_Alumni;
            $validation = $this->form_validation;
            $validation->set_rules($data->rules());

            if ($validation->run()) {
                $data->save();
                $this->session->set_flashdata('success', 'Berhasil disimpan');           
            }
                $this->load->view("admin/_partials/header");
                $this->load->view("admin/_partials/navbar");
                $this->load->view("admin/alumni/tambah_alumni");
                $this->load->view("admin/_partials/js.php");
                $this->load->view("admin/_partials/footer.php");
                $this->load->view("admin/_partials/modal");
        }
        redirect(site_url('admin/alumni'));    
    }


    public function edit($id)
    {   
        $kode = $this->security->xss_clean($this->input->post("gambar"));

        $session = $this->session->userdata('login'); 
        if($session != 'login'){
            redirect(site_url('admin/login'));
        }else{ 
            $id=$this->uri->segment(4);
            $data["alumni"] = $this->M_Alumni->id($id);
            
            $this->load->view("admin/_partials/header");
            $this->load->view("admin/_partials/navbar");
            $this->load->view("admin/alumni/edit_alumni", $data);
            $this->load->view("admin/_partials/js.php");
            $this->load->view("admin/_partials/footer.php");
            $this->load->view("admin/_partials/modal");              
        }        
    }
    
    public function update($id)
	{
        $row = $this->M_Alumni->getById($id);
        
		if ($_FILES AND $_FILES['gambar']['name']) {
				$config = array(
						'upload_path' => './upload/alumni/',
						'allowed_types' => 'gif|jpg|png|jpeg|bmp',
						'max_size' => '2048',
						'max_width' => '2000',
						'max_height' => '2000'
				);
                $this->load->library('upload', $config);           
				if (!$this->upload->do_upload('gambar')) {
                        redirect(site_url('admin/alumni'));
				} else {

						unlink('upload/alumni/'.$row->gambar);
						$file = $this->upload->data();
						$id = $this->input->post('id');
						$data = array(
                                'nama' => $this->input->post('nama'),
                                'titel' => $this->input->post('titel'),
                                'kutipan' => $this->input->post('kutipan'),
								'gambar' => $this->input->post('gambar'),
								'gambar' => $file['file_name'],
						);
                        $this->M_Alumni->update($id, $data);
                        
				}
		}
		else {
                unlink('upload/alumni/'.$row->gambar);
				$id = $this->input->post('id');
				$data = array(
                        'nama' => $this->input->post('nama'),
                        'titel' => $this->input->post('titel'),
                        'kutipan' => $this->input->post('kutipan'),
						'gambar' => $this->input->post('gambar'),
				);
                $this->M_Alumni->update($id, $data);         
		}
        redirect(site_url('admin/alumni'));
	}



    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->M_Alumni->delete($id)) {
            redirect(site_url('admin/alumni'));
        }
    }
}