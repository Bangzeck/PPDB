<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller
{   
    private $filename = "Data_Siswa";

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Siswa');
        $this->load->model('M_Accept');
        $this->load->model('M_Kode');
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
    {   
        $kode = $this->security->xss_clean($this->input->post("nisn"));
        $cek = $this->M_Kode->cek_kode($kode);

        // var_dump(count($cek));
        // exit;

        if (count($cek) == 1) {

            $this->load->library('form_validation');
            $this->form_validation->set_rules('nisn', 'Nisn','required|is_unique[db_data_siswa.nisn]');

            if($this->form_validation->run() == TRUE){
                $data_siswa = $this->M_Siswa;
                $validation = $this->form_validation;
                $validation->set_rules($data_siswa->rules());
                
                if ($validation->run()) {
                    $data_siswa->save();
                    $this->session->set_flashdata('success', 'Berhasil disimpan');               
                }
                redirect(); 
            }else{
                redirect(site_url('daftar_nisn')); 
            }    
        }else{
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
    


    
    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->M_Siswa->delete($id)) {
            redirect(site_url('admin/siswa'));
        }
    }

    // Export MySql to Exel (xsl)
    public function export()
    {
        include APPPATH.'third_party/PHPExcel/PHPExcel.php';

        $excel = new PHPExcel();

        $excel->getProperties()->setCreator('SMK Bina Utama')
                 ->setLastModifiedBy('SMK Bina Utama')
                 ->setTitle("DATA PESERTA DIDIK BARU")
                 ->setSubject("SISWA")
                 ->setDescription("Laporan Semua Data Calon Siswa")
                 ->setKeywords("Data Calon Siswa");

        $style_col = array(

                    'font' => array('bold' => true),
                    'alignment' => array(
                      'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, 
                      'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER
                    ),
                    'borders' => array(
                      'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),
                      'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),
                      'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),
                      'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN)
                    )
        );


        $style_row = array(
            'alignment' => array(
              'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER 
            ),
            'borders' => array(
              'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), 
              'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), 
              'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),
              'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) 
            )
        );

        $excel->setActiveSheetIndex(0)->setCellValue('A1', "DATA CALON SISWA"); 
        $excel->getActiveSheet()->mergeCells('A1:E1'); 
        $excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(TRUE); 
        $excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(15); 
        $excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER); 


        $excel->setActiveSheetIndex(0)->setCellValue('A3', "NO");
        $excel->setActiveSheetIndex(0)->setCellValue('B3', "NAMA");
        $excel->setActiveSheetIndex(0)->setCellValue('C3', "NISN");
        $excel->setActiveSheetIndex(0)->setCellValue('D3', "JENIS KELAMIN"); 
        $excel->setActiveSheetIndex(0)->setCellValue('E3', "DITERIMA/DITOLAK"); 
        
        $excel->getActiveSheet()->getStyle('A3')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('B3')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('C3')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('D3')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('E3')->applyFromArray($style_col);


         
        $siswa = $this->M_Siswa->getAll();
        $no = 1; 
        $numrow = 4; 
        foreach($siswa as $data){ 
        $excel->setActiveSheetIndex(0)->setCellValue('A'.$numrow, $no);
        $excel->setActiveSheetIndex(0)->setCellValue('B'.$numrow, $data->nama_siswa);
        $excel->setActiveSheetIndex(0)->setCellValue('C'.$numrow, $data->nisn);
        $excel->setActiveSheetIndex(0)->setCellValue('D'.$numrow, $data->jenis_kelamin);
        $excel->setActiveSheetIndex(0)->setCellValue('E'.$numrow, $data->status_pendaftaran);
        

        $excel->getActiveSheet()->getStyle('A'.$numrow)->applyFromArray($style_row);
        $excel->getActiveSheet()->getStyle('B'.$numrow)->applyFromArray($style_row);
        $excel->getActiveSheet()->getStyle('C'.$numrow)->applyFromArray($style_row);
        $excel->getActiveSheet()->getStyle('D'.$numrow)->applyFromArray($style_row);
        $excel->getActiveSheet()->getStyle('E'.$numrow)->applyFromArray($style_row);
        
        $no++; 
        $numrow++; 
        }


  
        $excel->getActiveSheet()->getColumnDimension('A')->setWidth(5); 
        $excel->getActiveSheet()->getColumnDimension('B')->setWidth(15); 
        $excel->getActiveSheet()->getColumnDimension('C')->setWidth(25); 
        $excel->getActiveSheet()->getColumnDimension('D')->setWidth(20); 
        $excel->getActiveSheet()->getColumnDimension('E')->setWidth(30); 
        
       
        $excel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(-1);

        $excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);

        $excel->getActiveSheet(0)->setTitle("Laporan Data Siswa");
        $excel->setActiveSheetIndex(0);

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="Data Siswa.xlsx"');
        header('Cache-Control: max-age=0');
        $write = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
        $write->save('php://output');


    }


    //Import Exel To MySql
    //Menampilakn Halaman Uploadnya.

    public function view_upload()
    {
        $session = $this->session->userdata('login'); 
        if($session != 'login'){
            redirect(site_url('admin/login'));
        }else{ 
            $this->load->view("admin/_partials/header");
            $this->load->view("admin/_partials/navbar");
            $this->load->view("admin/siswa/upload_excel");
            $this->load->view("admin/_partials/js.php");
            $this->load->view("admin/_partials/footer.php");
            $this->load->view("admin/_partials/modal");

        }
    }
    //membuat form untuk upload filenya.
    public function form()
    {
        $data = array();

        if (isset($_POST['preview'])) {
            $upload = $this->M_Siswa->upload_file_excel($this->filename);

            if ($upload['result'] == "success") {
                include APPPATH. 'third_party/PHPExcel/PHPExcel.php';

                $excelreader = new PHPExcel_Reader_Excel2007();
                $loadexcel = $excelreader->load('upload/excel/'.$this->filename.'.xlsx');
                $sheet = $loadexcel->getActiveSheet()->toArray(null, true ,true , true);

                $data['sheet'] = $sheet;
            }else{
                $data['upload_error'] = $upload['error'];
            }
        }

        $this->load->view("admin/_partials/header");
        $this->load->view("admin/_partials/navbar");
        $this->load->view("admin/siswa/upload_excel", $data);
        $this->load->view("admin/_partials/js.php");
        $this->load->view("admin/_partials/footer.php");
        $this->load->view("admin/_partials/modal");
    }

    // Untuk Import Filenya.
    public function import()
    {
        include APPPATH. 'third_party/PHPExcel/PHPExcel.php';

        $excelreader = new PHPExcel_Reader_Excel2007();
        $loadexcel = $excelreader->load('upload/excel/'.$this->filename.'.xlsx');
        $sheet = $loadexcel->getActiveSheet()->toArray(null, true ,true , true);

        $data = array();

        $numrow = 1;
        foreach($sheet as $row) {

            if ($numrow > 1) {
                array_push($data, array(
                    'nisn' => $row['A'],
                    'nilai_ujian' => $row['C'],
                    'status_pendaftaran' => $row['D'],
                    
                ));
            }
            $numrow++;
        }
        // var_dump($data);
        // exit;
        $this->M_Siswa->update_multiple($data);

        redirect('admin/siswa');

    }


} 