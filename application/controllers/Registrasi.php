<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrasi extends CI_Controller {

	public function index()
	{
		$this->load->view('pages/registrasi');
    }
    

	public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Registrasi');
        $this->load->library('form_validation');
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->helper('security');
    }
    
	public function add()
    {
        $nomor_rekening = $this->security->xss_clean($this->input->post("nomor_rekening"));
        $rekening = $this->M_Registrasi->cek_nomor_rekening($nomor_rekening);
        $tanggal = $this->M_Registrasi->cek_tanggal($nomor_rekening);
        $waktu = $this->M_Registrasi->cek_waktu($nomor_rekening);


        // echo $waktu;
        // var_dump($rekening);
        // exit;

        if (empty($rekening)) {
            $this->form_validation->set_rules('nisn', 'Nisn','required|is_unique[db_registrasi.nisn]');
            if($this->form_validation->run() == TRUE){
                $registrasi = $this->M_Registrasi;
                $validation = $this->form_validation;
                $validation->set_rules($registrasi->rules());

                if ($validation->run()) {
                    $registrasi->save();
                    $this->session->set_flashdata('sukses', 'Registrasi berhasil dikirim. Silahkan tunggu aktifasi NISN');
                }
                redirect(site_url('registrasi'));
            }else{

                $this->session->set_flashdata('tidak_sukses', 'Nisn sudah digunakan untuk registrasi.');
                redirect(site_url('registrasi')); 
            } 

        }else if(!empty($rekening) && $tanggal == $this->input->post("tanggal")  && $waktu != $this->input->post("waktu")){
            $this->form_validation->set_rules('nisn', 'Nisn','required|is_unique[db_registrasi.nisn]');
            if($this->form_validation->run() == TRUE){
                $registrasi = $this->M_Registrasi;
                $validation = $this->form_validation;
                $validation->set_rules($registrasi->rules());

                if ($validation->run()) {
                    $registrasi->save();
                    $this->session->set_flashdata('sukses', 'Registrasi berhasil dikirim. Silahkan tunggu aktifasi NISN');

                }
                redirect(site_url('registrasi'));
            }else{

                $this->session->set_flashdata('tidak_sukses', 'Nisn sudah digunakan untuk registrasi.');
                redirect(site_url('registrasi')); 
            } 
        }else if(!empty($rekening) && $tanggal != $this->input->post("tanggal")  && $waktu == $this->input->post("waktu")){
            $this->form_validation->set_rules('nisn', 'Nisn','required|is_unique[db_registrasi.nisn]');
            if($this->form_validation->run() == TRUE){
                $registrasi = $this->M_Registrasi;
                $validation = $this->form_validation;
                $validation->set_rules($registrasi->rules());

                if ($validation->run()) {
                    $registrasi->save();
                    $this->session->set_flashdata('sukses', 'Registrasi berhasil dikirim. Silahkan tunggu aktifasi NISN');

                }
                redirect(site_url('registrasi'));
            }else{

                $this->session->set_flashdata('tidak_sukses', 'Nisn sudah digunakan untuk registrasi.');
                redirect(site_url('registrasi')); 
            } 
        }else if(!empty($rekening) && $tanggal != $this->input->post("tanggal")  && $waktu != $this->input->post("waktu")){
            $this->form_validation->set_rules('nisn', 'Nisn','required|is_unique[db_registrasi.nisn]');
            if($this->form_validation->run() == TRUE){
                $registrasi = $this->M_Registrasi;
                $validation = $this->form_validation;
                $validation->set_rules($registrasi->rules());

                if ($validation->run()) {
                    $registrasi->save();
                    $this->session->set_flashdata('sukses', 'Registrasi berhasil dikirim. Silahkan tunggu aktifasi NISN');

                }
                redirect(site_url('registrasi'));
            }else{

                $this->session->set_flashdata('tidak_sukses', 'Nisn sudah digunakan untuk registrasi.');
                redirect(site_url('registrasi')); 
            } 
        }else if(!empty($rekening) && $tanggal == $this->input->post("tanggal") && $waktu == $this->input->post("waktu")){
            $this->session->set_flashdata('tidak_sukses', 'Maaf Kartu sudah pernah digunakan untuk registrasi');
            redirect(site_url('registrasi'));
        }
        
        
    }

}




	