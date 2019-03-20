<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Edit_akun_model extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('edit_akun_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['akun'] = $this->edit_akun_model->getAll();

        $data['main_content'] = 'admin/list_kategori';
        $data['title_dashboard'] = 'Edit Akun';
        $this->load->view('admin/overview', $data);
    }

    public function add()
    {
        $akun = $this->edit_akun_model;
        $validation = $this->form_validation;
        $validation->set_rules($akun->rules());

        if ($validation->run()) {
            $akun->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        redirect('admin/edit_akun');
    }
}
