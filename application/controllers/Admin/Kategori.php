<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('kategori_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['kategori'] = $this->kategori_model->getAll();


        $data['main_content'] = 'admin/list_kategori';
        $data['title_dashboard'] = 'Kusen';
        $this->load->view('admin/overview', $data);
    }

    public function add(){
        $kategori = $this->kategori_model;
        $validation = $this->form_validation;
        $validation->set_rules($kategori->rules());

        if($validation->run()){
            $kategori->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        redirect('admin/kategori');
    }
}
 