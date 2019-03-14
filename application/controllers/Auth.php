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
        $this->form_validation->set_rules('username', 'Username', '');
        $this->form_validation->set_rules('password', 'Password', '');
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
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $is_valid= $this->Login_model->validate($username, $password);


        if($is_valid ) {

            $data['message_error'] = true;
            $this->load->view('auth/login', $data);
            } else // incorrect username or password
            {
                
            redirect('admin/produk');
		}
    }
}
