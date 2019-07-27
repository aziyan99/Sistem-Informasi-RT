<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_Penduduk_Model extends CI_Model
{

    public function get()
    {
        return $this->db->get('data_penduduk')->result_array();
    }

    public function save($data)
    {
        $this->db->insert('data_penduduk', $data);
    }

    public function get_id()
    {
        $id = $this->uri->segment(3);
        return $this->db->get_where('data_penduduk', ['id' => $id])->row_array();
    }

    public function update($data)
    {
        $id = htmlspecialchars($this->input->post('id'), TRUE);
        return $this->db->update('data_penduduk', $data, ['id' => $id]);
    }

    public function get_kk()
    {
        $id = "Kepala Keluarga";
        return $this->db->get_where('data_penduduk', ['status_hubungan_dalam_keluarga' => $id])->result_array();
    }

    public function get_kk_detail()
    {
        $kk = $this->uri->segment(3);
        return $this->db->get_where('data_penduduk', ['no_kk' => $kk])->result_array();
    }

    public function get_kk_detail_keluarga()
    {
        $kk = $this->uri->segment(3);
        return $this->db->get_where('data_penduduk', ['id' => $kk])->row_array();
    }

    public function updateImage($file_name)
    {
        $penduduk = $this->db->get_where('data_penduduk', ['id' => $this->uri->segment(3)])->row_array();
        $id = $penduduk['id'];
        $this->db->update('data_penduduk', ['gambar' => $file_name], ['id' => $id]);
    }
}
