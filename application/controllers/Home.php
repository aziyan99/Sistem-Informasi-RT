<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function index()
	{
		$pengaturan['administrasi'] = $this->db->get('pengaturan', ['id' => 1])->row_array();

		$this->load->view('templates/depan_head', $pengaturan);
		$this->load->view('templates/depan_nav');
		$this->load->view('depan/home', $pengaturan);
		$this->load->view('templates/depan_footer', $pengaturan);
	}


	public function kontak()
	{
		$pengaturan['administrasi'] = $this->db->get('pengaturan', ['id' => 1])->row_array();

		$this->load->view('templates/depan_head', $pengaturan);
		$this->load->view('templates/depan_nav');
		$this->load->view('depan/kontak');
		$this->load->view('templates/depan_footer', $pengaturan);
	}

	public function cari()
	{

		$pengaturan['administrasi'] = $this->db->get('pengaturan', ['id' => 1])->row_array();


		$this->form_validation->set_rules('cari', 'Cari', 'trim|required');
		if ($this->form_validation->run() == false) {
			$this->load->view('templates/depan_head', $pengaturan);
			$this->load->view('templates/depan_nav');
			$this->load->view('depan/cari');
			$this->load->view('templates/depan_footer', $pengaturan);
		} else {
			$q = htmlspecialchars($this->input->post('cari'));
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

			$result['penduduk'] = $this->db->get('data_penduduk')->result_array();
			$this->load->view('templates/depan_head', $pengaturan);
			$this->load->view('templates/depan_nav');
			$this->load->view('depan/hasil', $result);
			$this->load->view('templates/depan_footer', $pengaturan);
		}
	}


	public function pesan()
	{
		$data = [
			'email/no_hp' => htmlspecialchars($this->input->post('kontak'), TRUE),
			'pesan' => htmlspecialchars($this->input->post('pesan'), TRUE),
			'tanggal_dikirim' => time()
		];

		$this->db->insert('pesan', $data);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Pesan anda telah terkirim
            </div>');
		redirect('home/kontak');
	}
}
