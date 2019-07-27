<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cari extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Cari_model', 'cari');
    }

    public function index()
    {
        $user           = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $name           = $user['nama'];
        $img            = $user['img'];
        $date_created   = $user['date_created'];
        $data = [
            'head'          => 'Cari Penduduk',
            'name'          => $name,
            'img'           => $img,
            'date_created'  => $date_created
        ];

        $this->load->view('templates/head', $data);
        $this->load->view('templates/nav', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('cari/index');
        $this->load->view('templates/footer');
    }

    public function data()
    {
        $q = htmlspecialchars($this->input->post('q'), TRUE);
        $p['penduduk'] = $this->cari->cari($q);

        $user           = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $name           = $user['nama'];
        $img            = $user['img'];
        $date_created   = $user['date_created'];
        $data = [
            'head'          => 'Cari Penduduk',
            'name'          => $name,
            'img'           => $img,
            'date_created'  => $date_created
        ];

        $this->load->view('templates/head', $data);
        $this->load->view('templates/nav', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('cari/hasil', $p);
        $this->load->view('templates/footer');
    }
}
