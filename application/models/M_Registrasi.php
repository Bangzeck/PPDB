<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_Registrasi extends CI_Model
{
    private $_table = "db_registrasi";
    private $_table_code = "db_kode_form";

    public $nisn;
    public $nomor_rekening;
    public $tanggal;
    public $waktu;
    public $gambar;
    public $email;
    public $tanggal_registrasi;
    public $status;

    public function rules()
    {
        return [
            ['field' => 'nisn',
            'label' => 'Nisn',
            'rules' => 'required'],

            ['field' => 'nomor_rekening',
            'label' => 'Nomor_rekening',
            'rules' => 'required'],

            ['field' => 'tanggal',
            'label' => 'Tanggal',
            'rules' => 'required'],

            ['field' => 'waktu',
            'label' => 'Waktu',
            'rules' => 'required'],
            
            ['field' => 'email',
            'label' => 'Email',
            'rules' => 'required']
        ];
    } 

    public function getAll()
    {   
        // $this->db->order_by("tanggal_registrasi", "desc");
        return $this->db->get($this->_table)->result();
    }

    public function getAktif()
    {
        $this->db->where('status', 1);
        return $this->db->get($this->_table)->result();
    }

    public function getNonAktif()
    {
        $this->db->where('status', 0);
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    public function getByNisn($kode)
    {
        return $this->db->get_where($this->_table, ["nisn" => $kode])->row();
    }

    public function id($id)
    {
        $this->db->where('id', $id);
        return $query= $this->db->get($this->_table)->result();

    }
    
    
    public function save()
    {
        $post = $this->input->post();
        $this->nisn = $post["nisn"];
        $this->nomor_rekening = $post["nomor_rekening"];
        $this->tanggal = $post["tanggal"];
        $this->waktu = $post["waktu"];
        $this->nama_pengirim = $post["nama_pengirim"];
        $this->email = $post["email"];
        $this->gambar = $this->_uploadImage();
        $this->status = 0;
        $this->db->insert($this->_table, $this);
    }

    
    private function _uploadImage()
    {
        $config['upload_path']          = './upload/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['overwrite']			= false;
        $config['max_size']             = 1024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

            if ($this->upload->do_upload('gambar')) {
                return $this->upload->data("file_name");
            }
    
    }

    function cek_tanggal($nomor_rekening){
        $this->db->select('tanggal');
        $this->db->where('nomor_rekening', $nomor_rekening);
        $query = $this->db->get('db_registrasi');
        return $query->row()->tanggal;
    }

    function cek_waktu($nomor_rekening){
        $this->db->select('waktu');
        $this->db->where('nomor_rekening', $nomor_rekening);
        $query = $this->db->get('db_registrasi');
        return $query->row()->waktu;
    }

    function cek_nomor_rekening($nomor_rekening){
        $this->db->select('nomor_rekening');
        $this->db->where('nomor_rekening',$nomor_rekening);
        $query = $this->db->get('db_registrasi');
        return $query->row()->nomor_rekening;
    }

    public function statusAktif($nisn)
    {   
        $post = $this->input->post();     
        $this->nisn = $post["nisn"];
        $this->nomor_rekening = $post["nomor_rekening"];
        $this->tanggal = $post["tanggal"];
        $this->waktu = $post["waktu"];
        $this->gambar = $post["gambar"];
        $this->nama_pengirim = $post["nama_pengirim"];
        $this->email = $post["email"];
        $this->status = 1;
        $this->db->where('nisn', $nisn);
        $this->db->update($this->_table, $this);
        
    }

    public function statusNonAktif($nisn)
    {   
        $post = $this->input->post();     
        $this->nisn = $post["nisn"];
        $this->nomor_rekening = $post["nomor_rekening"];
        $this->tanggal = $post["tanggal"];
        $this->waktu = $post["waktu"];
        $this->gambar = $post["gambar"];
        $this->nama_pengirim = $post["nama_pengirim"];
        $this->email = $post["email"];
        $this->status = 0;
        $this->db->where('nisn', $nisn);
        $this->db->update($this->_table, $this);
        
    }

    public function delete($id)
    {   
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array("id" => $id));
    }


    private function _deleteImage($id)
    {
        $foto = $this->getById($id);
        if ($foto->image != "default.jpg") {
            $filename = explode(".", $foto->gambar)[0];
            return array_map('unlink', glob(FCPATH."upload/$filename.*"));
        }
    }

}