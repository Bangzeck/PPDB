<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_Siswa extends CI_Model
{
    private $_table = "db_data_siswa";

    public $nisn;
    public $nama_siswa;
    public $jenis_kelamin;
    public $tempat_lahir;
    public $tanggal_lahir;
    public $agama;
    public $status_keluarga;
    public $alamat_siswa;
    public $nomor_siswa;

    public $nama_ayah;
    public $pendidikan_ayah;
    public $pekerjaan_ayah;
    public $penghasilan_ayah;
    public $nomor_ayah;
    public $nama_ibu;
    public $pendidikan_ibu;
    public $pekerjaan_ibu;
    public $penghasilan_ibu;
    public $nomor_ibu;

    public $nama_wali;
    public $pendidikan_wali;
    public $pekerjaan_wali;
    public $penghasilan_wali;
    public $nomor_wali;


    public $npsn_sekolah;
    public $nama_sekolah;
    public $status_sekolah;
    public $alamat_sekolah;
    public $tahun_lulus;
    public $status_pendaftaran;
    public $tanggal_pendaftaran;

    public function rules()
    {
        return [
            ['field' => 'nisn',
            'label' => 'Nisn',
            'rules' => 'required'],

            ['field' => 'nama_siswa',
            'label' => 'Nama_siswa',
            'rules' => 'required'],

            ['field' => 'tempat_lahir',
            'label' => 'Tempat_lahir',
            'rules' => 'required'],

            ['field' => 'tanggal_lahir',
            'label' => 'Tanggal_lahir',
            'rules' => 'required'],

            ['field' => 'agama',
            'label' => 'Agama',
            'rules' => 'required'],
            
            ['field' => 'status_keluarga',
            'label' => 'Status_keluarga',
            'rules' => 'required'],

            ['field' => 'alamat_siswa',
            'label' => 'Alamat_siswa',
            'rules' => 'required']
        ];
    }


    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function id($id)
    {
        $this->db->where('id', $id);
        return $query= $this->db->get($this->_table)->result();

    }

    public function nisn($nisn)
    {
        $this->db->where('nisn', $nisn);
        return $query= $this->db->get($this->_table)->result();

    }

    public function save()
    {
        $post = $this->input->post();

        $this->nisn = $post["nisn"];
        $this->nama_siswa = $post["nama_siswa"];
        $this->jenis_kelamin = $post["jenis_kelamin"];
        $this->tempat_lahir = $post["tempat_lahir"];
        $this->tanggal_lahir = $post["tanggal_lahir"];
        $this->agama = $post["agama"];
        $this->status_keluarga = $post["status_keluarga"];
        $this->alamat_siswa = $post["alamat_siswa"];
        $this->nomor_siswa = $post["nomor_siswa"];

        $this->nama_ayah = $post["nama_ayah"];
        $this->pendidikan_ayah = $post["pendidikan_ayah"];
        $this->pekerjaan_ayah = $post["pekerjaan_ayah"];
        $this->penghasilan_ayah = $post["penghasilan_ayah"];
        $this->nomor_ayah = $post["nomor_ayah"];
        $this->nama_ibu = $post["nama_ibu"];
        $this->pendidikan_ibu = $post["pendidikan_ibu"];
        $this->pekerjaan_ibu = $post["pekerjaan_ibu"];
        $this->penghasilan_ibu = $post["penghasilan_ibu"];
        $this->nomor_ibu = $post["nomor_ibu"];

        $this->nama_wali = $post["nama_wali"];
        $this->pendidikan_wali = $post["pendidikan_wali"];
        $this->pekerjaan_wali = $post["pekerjaan_wali"];
        $this->penghasilan_wali = $post["penghasilan_wali"];
        $this->nomor_wali = $post["nomor_wali"];

        $this->npsn_sekolah = $post["npsn_sekolah"];
        $this->nama_sekolah = $post["nama_sekolah"];
        $this->status_sekolah = $post["status_sekolah"];
        $this->alamat_sekolah = $post["alamat_sekolah"];
        $this->tahun_lulus = $post["tahun_lulus"];

        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();

        $this->id = $post["id"];
        $this->nisn = $post["nisn"];
        $this->nama_siswa = $post["nama_siswa"];
        $this->jenis_kelamin = $post["jenis_kelamin"];
        $this->tempat_lahir = $post["tempat_lahir"];
        $this->tanggal_lahir = $post["tanggal_lahir"];
        $this->agama = $post["agama"];
        $this->status_keluarga = $post["status_keluarga"];
        $this->alamat_siswa = $post["alamat_siswa"];
        $this->nomor_siswa = $post["nomor_siswa"];

        $this->nama_ayah = $post["nama_ayah"];
        $this->pendidikan_ayah = $post["pendidikan_ayah"];
        $this->pekerjaan_ayah = $post["pekerjaan_ayah"];
        $this->penghasilan_ayah = $post["penghasilan_ayah"];
        $this->nomor_ayah = $post["nomor_ayah"];
        $this->nama_ibu = $post["nama_ibu"];
        $this->pendidikan_ibu = $post["pendidikan_ibu"];
        $this->pekerjaan_ibu = $post["pekerjaan_ibu"];
        $this->penghasilan_ibu = $post["penghasilan_ibu"];
        $this->nomor_ibu = $post["nomor_ibu"];

        $this->nama_wali = $post["nama_wali"];
        $this->pendidikan_wali = $post["pendidikan_wali"];
        $this->pekerjaan_wali = $post["pekerjaan_wali"];
        $this->penghasilan_wali = $post["penghasilan_wali"];
        $this->nomor_wali = $post["nomor_wali"];

        $this->npsn_sekolah = $post["npsn_sekolah"];
        $this->nama_sekolah = $post["nama_sekolah"];
        $this->status_sekolah = $post["status_sekolah"];
        $this->alamat_sekolah = $post["alamat_sekolah"];
        $this->tahun_lulus = $post["tahun_lulus"];
        $this->status_pendaftaran = $post["status_pendaftaran"];
        $this->tanggal_pendaftaran = $post["tanggal_pendaftaran"];

        $this->db->update($this->_table, $this, array('id' => $post['id']));
    }



    public function getDiterima() {
        $results = array();
        $this->db->select('id, nama_siswa, nisn, status_pendaftaran, jenis_kelamin');
        $this->db->from($this->_table);
        $this->db->where('status_pendaftaran',"Diterima");
    
        $query = $this->db->get();
    
        if($query->num_rows() > 0) {
            $results = $query->result();
        }
        return $results;
    }

    public function getDitolak() {
        $results = array();
        $this->db->select('id, nama_siswa, nisn, status_pendaftaran, jenis_kelamin');
        $this->db->from($this->_table);
        $this->db->where('status_pendaftaran',"Tidak Diterima");
    
        $query = $this->db->get();
    
        if($query->num_rows() > 0) {
            $results = $query->result();
        }
        return $results;
    }


    public function getVerifikasi() {
        $results = array();
        $this->db->select('id, nama_siswa, nisn, status_pendaftaran, jenis_kelamin');
        $this->db->from($this->_table);
        $this->db->where('status_pendaftaran',"Belum Diverifikasi");
    
        $query = $this->db->get();
    
        if($query->num_rows() > 0) {
            $results = $query->result();
        }
        return $results;
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id" => $id));
    }


    // DASHBOARD
    
    public function jumlahSiswa(){
        $sql = "SELECT count(id) as id FROM db_data_siswa";
        $result = $this->db->query($sql);
        return $result->row()->id;
    }

    public function jumlahDiterima(){
        $this->db->select("count(status_pendaftaran) as status_pendaftaran");
        $this->db->from($this->_table);
        $this->db->where('status_pendaftaran',"Diterima");
        return $this->db->get()->row()->status_pendaftaran;
    }
    public function jumlahDitolak(){
        $this->db->select("count(status_pendaftaran) as status_pendaftaran");
        $this->db->from($this->_table);
        $this->db->where('status_pendaftaran',"Tidak Diterima");
        return $this->db->get()->row()->status_pendaftaran;
    }
    public function jumlahVerifkasi(){
        $this->db->select("count(status_pendaftaran) as status_pendaftaran");
        $this->db->from($this->_table);
        $this->db->where('status_pendaftaran',"Belum Diverifikasi");
        return $this->db->get()->row()->status_pendaftaran;
    }


    function cek_user($nisn){
        $this->db->where('nisn',$nisn);
        $query = $this->db->get('db_data_siswa');
        return $query->result_array();
    }


    
      
}

