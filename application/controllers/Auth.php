<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('form', 'url');
    }

    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
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
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        /*
           $is_valid=    $this->Login_model->validate(   $username,    $password);


        if($is_valid) {

               $data ['message_error'] = true;
               $this->load->view('auth/login',    $data);
            } else // incorrect username or password
            {
                
            redirect('admin/dashboard');
		}
        */
        $user =  $this->db->get_where('user', ['email' => $email])->row_array();
        //cek value
        //var_dump($user);
        //die;
        //
        /* 
           if($user)
           {
                if(password_verify($password, $user['password']))
                {
                    $data = [
                        'email' => $user['email']
                    ];
                    $this->session->set_userdata($data);
                    redirect('admin/dashboard');
                }else{
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong Password</div>');
                    redirect('auth');
                }
           }else{
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email is not Registered!</div>');
            redirect('auth');
           }
           */

        if ($user) {
            //jika user aktif
            if ($user['is_active'] == 1) {
                //cek password
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id']
                    ];
                    $this->session->set_userdata('logged_in', $data);
                    redirect('admin/dashboard');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Salah</div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Email Belum Aktif</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Email Belum Terdaftar</div>');
            redirect('auth');
        }
    }


    /*
           //Berkas Lama

        if (   $user) {
            //jika user aktif
            var_dump(   $user);
            die;
            
            if (password_verify(   $password,    $user ['password'])) {
                //password verify
                   $data = array('email' => $user,
                   'status' => "login");
                   $this->session->set_userdata(   $data);
                redirect('admin/dashboard');
            } else {
                   $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong Password!</div>');
                redirect('auth');
            }
            
             if (   $user ['is_active'] == 1) {
                //cek password
                
            } else {
                   $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">This Email has not been Activacted!</div>');
                redirect('auth');
            }

            
        } else {
               $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email is not Registered!</div>');
            redirect('auth');
        }
        */



    public function registration()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[user.email]', [
            'is_unique' => 'This email has already registered!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'trim|required|min_length[3]|matches[password2]', [
            'matches' => 'Password dont match!',
            'min_length' => 'Password to short!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'trim|required|min_length[3]|matches[password1]');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'E-PEM ADMIN PANEL';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/registration');
            $this->load->view('templates/auth_footer');
        } else {
            $data = [
                'email' => htmlspecialchars($this->input->post('email', true)),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'is_active' => 1
            ];

            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation! account has been created!</div>');
            redirect('auth');
        }
    }

    public function logout()
    {
        $sess_array = array(
            'email' => ''
        );
        $this->session->unset_userdata('logged_in', $sess_array);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You Have been Logged out!</div>');
        redirect('auth');
    }
}
