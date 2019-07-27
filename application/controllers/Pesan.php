<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Pesan extends CI_Controller
{

    public function index()
    {
        $user = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $name = $user['nama'];
        $img  = $user['img'];
        $date_created = $user['date_created'];
        $data = [
            'head'          => 'Pesan',
            'name'          => $name,
            'img'           => $img,
            'date_created'  => $date_created
        ];

        $data['pesan'] = $this->db->get('pesan')->result_array();

        $this->load->view('templates/head');
        $this->load->view('templates/nav', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('pesan/index', $data);
        $this->load->view('templates/footer');
    }

    public function delete()
    {
        $id = $this->uri->segment(3);
        $this->db->delete('pesan', ['id' => $id]);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Data berhasil dihapus
        </div>');
        redirect('pesan');
    }
}
