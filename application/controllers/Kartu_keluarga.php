<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kartu_keluarga extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Data_Penduduk_model', 'penduduk');
    }

    public function index()
    {
        $user           = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $name           = $user['nama'];
        $img            = $user['img'];
        $date_created   = $user['date_created'];
        $data = [
            'head'          => 'Data Penduduk',
            'name'          => $name,
            'img'           => $img,
            'date_created'  => $date_created
        ];

        $p['penduduk'] = $this->penduduk->get_kk();



        $this->load->view('templates/head', $data);
        $this->load->view('templates/nav', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('dataKk/index', $p);
        $this->load->view('templates/footer');
    }

    public function detail()
    {
        $user           = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $name           = $user['nama'];
        $img            = $user['img'];
        $date_created   = $user['date_created'];
        $data = [
            'head'          => 'Data Detail Keluarga',
            'name'          => $name,
            'img'           => $img,
            'date_created'  => $date_created
        ];

        $p['penduduk'] = $this->penduduk->get_kk_detail();



        $this->load->view('templates/head', $data);
        $this->load->view('templates/nav', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('dataKk/detail', $p);
        $this->load->view('templates/footer');
    }

    public function detail_keluarga()
    {
        $user           = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $name           = $user['nama'];
        $img            = $user['img'];
        $date_created   = $user['date_created'];
        $data = [
            'head'          => 'Detail Anggota Keluarga',
            'name'          => $name,
            'img'           => $img,
            'date_created'  => $date_created
        ];

        $p['penduduk'] = $this->penduduk->get_kk_detail_keluarga();



        $this->load->view('templates/head', $data);
        $this->load->view('templates/nav', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('dataKk/detailKeluarga', $p);
        $this->load->view('templates/footer');
    }
}
