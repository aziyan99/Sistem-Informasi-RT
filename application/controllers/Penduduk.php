<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penduduk extends CI_Controller
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
            'title'         => 'Safeco | dashboard',
            'head'          => 'Data Penduduk',
            'name'          => $name,
            'img'           => $img,
            'date_created'  => $date_created
        ];

        $p['penduduk'] = $this->penduduk->get();

        $this->load->view('templates/head', $data);
        $this->load->view('templates/nav', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('dataPenduduk/index', $p);
        $this->load->view('templates/footer');
    }

    public function add()
    {
        $user           = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $name           = $user['nama'];
        $img            = $user['img'];
        $date_created   = $user['date_created'];
        $data = [
            'title'         => 'Safeco | dashboard',
            'head'          => 'Data Penduduk',
            'name'          => $name,
            'img'           => $img,
            'date_created'  => $date_created
        ];


        $this->form_validation->set_rules('nik', 'Nik', 'trim|required|numeric|is_unique[data_penduduk.nik]', [
            'required' => 'Nik tidak boleh kosong',
            'numeric' => 'Nik hanya berupa angka',
            'is_unique' => 'Nik sudah terdaftar'
        ]);

        $this->form_validation->set_rules('no_kk', 'No KK', 'trim|required|numeric', [
            'required' => 'No kk tidak boleh kosong',
            'numeric' => 'No kk hanya berupa angka',
        ]);

        $this->form_validation->set_rules('nama', 'Nama', 'trim|required', [
            'required' => 'Nama tidak boleh kosong'
        ]);

        $this->form_validation->set_rules('jenis_kelamin', 'Jenis kelamin', 'trim|required', [
            'required' => 'Jenis kelamin tidak boleh kosong'
        ]);

        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'trim|required', [
            'required' => 'Tempat lahir tidak boleh kosong'
        ]);

        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'trim|required', [
            'required' => 'Tanggal lahir tidak boleh kosong'
        ]);

        $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required', [
            'required' => 'Alamat lahir tidak boleh kosong'
        ]);

        $this->form_validation->set_rules('agama', 'Agama', 'trim|required', [
            'required' => 'Agama tidak boleh kosong'
        ]);

        $this->form_validation->set_rules('status_perkawinan', 'Status perkawinan', 'trim|required', [
            'required' => 'Status perkawinan tidak boleh kosong'
        ]);

        $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'trim|required', [
            'required' => 'Pekerjaan tidak boleh kosong'
        ]);

        $this->form_validation->set_rules('kewarganegaraan', 'Kewarganegaraan', 'trim|required', [
            'required' => 'Kewarganegaraan tidak boleh kosong'
        ]);

        $this->form_validation->set_rules('pendidikan', 'Pendidikan', 'trim|required', [
            'required' => 'Pendidikan tidak boleh kosong'
        ]);

        $this->form_validation->set_rules('status_hubungan_dalam_keluarga', 'Status hubungan dalam keluarga', 'trim|required', [
            'required' => 'Status Hubungan di dalam keluarga tidak boleh kosong'
        ]);

        $this->form_validation->set_rules('ayah', 'Ayah', 'trim|required', [
            'required' => 'Nama ayah tidak boleh kosong'
        ]);

        $this->form_validation->set_rules('ibu', 'Ibu', 'trim|required', [
            'required' => 'Nama ibu tidak boleh kosong'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/head', $data);
            $this->load->view('templates/nav', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('dataPenduduk/add');
            $this->load->view('templates/footer');
        } else {

            $config['upload_path'] = FCPATH . 'assets/img/penduduk/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '100';
            $config['max_width']  = '1024';
            $config['max_height']  = '768';

            $this->load->library('upload');
            $this->upload->initialize($config);

            if (!$this->upload->do_upload('image')) {

                $errors = $this->upload->display_errors();
                $this->load->view('errors/sistem/errUpload', $errors);
            } else {
                $data = array('upload_data' => $this->upload->data());
                $file_name = $data['upload_data']['file_name'];
            }

            $data = [
                'nik' => htmlspecialchars($this->input->post('nik'), TRUE),
                'no_kk' => htmlspecialchars($this->input->post('no_kk'), TRUE),
                'nama' => htmlspecialchars($this->input->post('nama'), TRUE),
                'jenis_kelamin' => htmlspecialchars($this->input->post('jenis_kelamin'), TRUE),
                'tempat_lahir' => htmlspecialchars($this->input->post('tempat_lahir'), TRUE),
                'tanggal_lahir' => htmlspecialchars($this->input->post('tanggal_lahir'), TRUE),
                'alamat' => htmlspecialchars($this->input->post('alamat'), TRUE),
                'agama' => htmlspecialchars($this->input->post('agama'), TRUE),
                'status_perkawinan' => htmlspecialchars($this->input->post('status_perkawinan'), TRUE),
                'pekerjaan' => htmlspecialchars($this->input->post('pekerjaan'), TRUE),
                'kewarganegaraan' => htmlspecialchars($this->input->post('kewarganegaraan'), TRUE),
                'pendidikan' => htmlspecialchars($this->input->post('pendidikan'), TRUE),
                'status_hubungan_dalam_keluarga' => htmlspecialchars($this->input->post('status_hubungan_dalam_keluarga'), TRUE),
                'no_passpor' => htmlspecialchars($this->input->post('no_passpor'), TRUE),
                'no_kitas_kitap' => htmlspecialchars($this->input->post('no_kitas_kitap'), TRUE),
                'ayah' => htmlspecialchars($this->input->post('ayah'), TRUE),
                'ibu' => htmlspecialchars($this->input->post('ibu'), TRUE),
                'gambar' => $file_name
            ];


            $this->penduduk->save($data);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data berhasil ditambah
            </div>');
            redirect('penduduk');
        }
    }

    public function edit()
    {
        $user           = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $name           = $user['nama'];
        $img            = $user['img'];
        $date_created   = $user['date_created'];
        $data = [
            'title'         => 'Safeco | dashboard',
            'head'          => 'Data Penduduk',
            'name'          => $name,
            'img'           => $img,
            'date_created'  => $date_created
        ];


        $this->form_validation->set_rules('nik', 'Nik', 'trim|required|numeric', [
            'required' => 'Nik tidak boleh kosong',
            'numeric' => 'Nik hanya berupa angka'
        ]);

        $this->form_validation->set_rules('no_kk', 'No KK', 'trim|required|numeric', [
            'required' => 'No KK tidak boleh kosong',
            'numeric' => 'No KK hanya berupa angka'
        ]);

        $this->form_validation->set_rules('jenis_kelamin', 'Jenis kelamin', 'trim|required', [
            'required' => 'Jenis kelamin tidak boleh kosong'
        ]);

        $this->form_validation->set_rules('nama', 'Nama', 'trim|required', [
            'required' => 'Nama tidak boleh kosong'
        ]);

        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'trim|required', [
            'required' => 'Tempat lahir tidak boleh kosong'
        ]);

        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'trim|required', [
            'required' => 'Tanggal lahir tidak boleh kosong'
        ]);

        $this->form_validation->set_rules('agama', 'Agama', 'trim|required', [
            'required' => 'Agama tidak boleh kosong'
        ]);

        $this->form_validation->set_rules('status_perkawinan', 'Status perkawinan', 'trim|required', [
            'required' => 'Status perkawinan tidak boleh kosong'
        ]);

        $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'trim|required', [
            'required' => 'Pekerjaan tidak boleh kosong'
        ]);

        $this->form_validation->set_rules('kewarganegaraan', 'Kewarganegaraan', 'trim|required', [
            'required' => 'Kewarganegaraan tidak boleh kosong'
        ]);

        if ($this->form_validation->run() == false) {
            $data['penduduk'] = $this->penduduk->get_id();
            $this->load->view('templates/head', $data);
            $this->load->view('templates/nav', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('dataPenduduk/edit', $data);
            $this->load->view('templates/footer');
        } else {


            $config['upload_path'] = FCPATH . 'assets/img/penduduk/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '100';
            $config['max_width']  = '1024';
            $config['max_height']  = '768';

            $this->load->library('upload');
            $this->upload->initialize($config);

            if (!$this->upload->do_upload('image')) {

                $errors = $this->upload->display_errors();
                $this->load->view('errors/sistem/errUpload', $errors);
            } else {
                $data = array('upload_data' => $this->upload->data());
                $file_name = $data['upload_data']['file_name'];
            }



            $data = [
                'nik' => htmlspecialchars($this->input->post('nik'), TRUE),
                'no_kk' => htmlspecialchars($this->input->post('no_kk'), TRUE),
                'jenis_kelamin' => htmlspecialchars($this->input->post('jenis_kelamin'), TRUE),
                'nama' => htmlspecialchars($this->input->post('nama'), TRUE),
                'tempat_lahir' => htmlspecialchars($this->input->post('tempat_lahir'), TRUE),
                'tanggal_lahir' => htmlspecialchars($this->input->post('tanggal_lahir'), TRUE),
                'agama' => htmlspecialchars($this->input->post('agama'), TRUE),
                'status_perkawinan' => htmlspecialchars($this->input->post('status_perkawinan'), TRUE),
                'pekerjaan' => htmlspecialchars($this->input->post('pekerjaan'), TRUE),
                'kewarganegaraan' => htmlspecialchars($this->input->post('kewarganegaraan'), TRUE),
                'pendidikan' => htmlspecialchars($this->input->post('pendidikan'), TRUE),
                'status_hubungan_dalam_keluarga' => htmlspecialchars($this->input->post('status_hubungan_dalam_keluarga'), TRUE),
                'no_passpor' => htmlspecialchars($this->input->post('no_passpor'), TRUE),
                'no_kitas_kitap' => htmlspecialchars($this->input->post('no_kitas_kitap'), TRUE),
                'ayah' => htmlspecialchars($this->input->post('ayah'), TRUE),
                'ibu' => htmlspecialchars($this->input->post('ibu'), TRUE),
                'gambar' => $file_name
            ];

            $this->penduduk->update($data);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data berhasil diubah
            </div>');
            redirect('penduduk');
        }
    }

    public function delete()
    {
        $id = $this->uri->segment(3);
        $this->db->delete('data_penduduk', ['id' => $id]);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Data berhasil dihapus
            </div>');
        redirect('penduduk');
    }

    public function detail()
    {
        $user           = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $name           = $user['nama'];
        $img            = $user['img'];
        $date_created   = $user['date_created'];
        $data = [
            'title'         => 'Safeco | dashboard',
            'head'          => 'Data Penduduk',
            'name'          => $name,
            'img'           => $img,
            'date_created'  => $date_created
        ];

        $p['penduduk'] = $this->penduduk->get_id();

        $this->load->view('templates/head', $data);
        $this->load->view('templates/nav', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('dataPenduduk/detail', $p);
        $this->load->view('templates/footer');
    }
}
