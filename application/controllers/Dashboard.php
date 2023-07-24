<?php

class Dashboard extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Dashboard';
        $this->load->view('admin/partials/header', $data);
        $this->load->view('admin/partials/sidebar');
        $this->load->view('admin/index');
        $this->load->view('admin/partials/footer');
    }
    public function user()
    {
        $this->load->view('admin/partials/header');
        $this->load->view('admin/partials/sidebar');
        $this->load->view('admin/user');
        $this->load->view('admin/partials/footer');
    }
}
