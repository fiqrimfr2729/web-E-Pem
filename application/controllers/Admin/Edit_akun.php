<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Edit_akun extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['main_content'] = 'admin/edit_akun_view';
        $data['title_dashboard'] = 'Setting';
        $this->load->view('admin/overview', $data);
    }

    public function akun()
    {
        $akun = $this->edit_akun_model;
        $validation = $this->form_validation;
        $validation->set_rules($akun->rules());

        if ($validation->run() == false) {
            $data['akun'] = $this->edit_akun_model->getById();

            $data['main_content'] = 'admin/edit_akun_view';
            $data['title_dashboard'] = 'Akun';
            $this->load->view('admin/overview', $data);
        } else {
            $post = $this->input->post();
            $email = $post['email'];;
            $this->add('email', $email);
        }
    }
}
