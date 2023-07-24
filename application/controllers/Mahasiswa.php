<?php

class Mahasiswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mahasiswa_model');
    }

    public function index()
    {
        $data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa();
        $data['title'] = "Mahasiswa";
        $this->load->view('admin/partials/header', $data);
        $this->load->view('admin/partials/sidebar');
        $this->load->view('admin/mahasiswa/index', $data);
        $this->load->view('admin/partials/footer');
    }

    public function tambah_mahasiswa()
    {
        $data['title'] = "Tambah Mahasiswa";

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nim', 'NIM', 'required|numeric');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal lahir', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|is_unique[data_mahasiswa.email]');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/partials/header', $data);
            $this->load->view('admin/partials/sidebar');
            $this->load->view('admin/mahasiswa/tambah', $data);
            $this->load->view('admin/partials/footer');
        }
    }
}
