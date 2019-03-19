<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('email', 'email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'password', 'trim|required');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'E-Pem Admin Panel';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/login');
            $this->load->view('templates/auth_footer');
        } else {
            //validasi sukses
            $this->_login();
        }
    }

    private function _login()
    {
        $this->load->model('login_model');
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $is_valid=$this->login_model->validate($email,$password);


        if($is_valid)
        {
            redirect('admin/produk');
        } else // incorrect username or password
        {
            $data['message_error'] = true;
            $this->load->view('auth/login',    $data);
		}

          
    }

    public function logout()
    {
        $this->session->unset_userdata('email');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You Have been Logged out!</div>');
        redirect('auth');
    }
}

 
 
 