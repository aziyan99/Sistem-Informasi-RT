<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cari_model extends CI_Model
{

    public function cari($q)
    {
        $this->db->like('nik', $q);
        $this->db->like('no_kk', $q);
        $this->db->or_like('nama', $q);
        $this->db->or_like('jenis_kelamin', $q);
        $this->db->or_like('tempat_lahir', $q);
        $this->db->or_like('tanggal_lahir', $q);
        $this->db->or_like('agama', $q);
        $this->db->or_like('status_perkawinan', $q);
        $this->db->or_like('pekerjaan', $q);
        $this->db->or_like('kewarganegaraan', $q);
        $this->db->or_like('pendidikan', $q);
        $this->db->or_like('status_hubungan_dalam_keluarga', $q);
        $this->db->or_like('no_passpor', $q);
        $this->db->or_like('no_kitas_kitap', $q);
        $this->db->or_like('ayah', $q);
        $this->db->or_like('ibu', $q);

        $result = $this->db->get('data_penduduk')->result_array();
        return $result;
    }
}
