<?php

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';
use Restserver\Libraries\REST_Controller;

class Login extends REST_Controller
{

    function __construct($config = 'rest')
    {
        parent::__construct($config);
        $this->load->database();
    }

    function login_post()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('', '');

        $config = array(
            array(
                'field' => 'email',
                'label' => 'email',
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => 'Email tidak boleh kosong',
                    'valid_email' => 'Format email salah',
                    'min_lenght' => ''
                ]
            ),
            array(
                'field' => 'password',
                'label' => 'password',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Password tidak boleh kosong',
                ]
            )
        );
        $this->form_validation->set_rules($config);

        $email = $this->post('email');
        $password = $this->post('password');
        $user =  $this->db->get_where('user', ['email' => $email])->row_array();

        if ($this->form_validation->run() != false) {
            if ($user) {
                //jika user aktif
                if ($user['is_active'] == 1) {
                    //cek password
                    if (password_verify($password, $user['password'])) {
                        $this->response([
                            'value'   => 1,
                            'message' => 'berhasil'
                        ], 200);
                    } else {
                        $this->response([
                            'value'   => 0,
                            'message' => 'password salah'
                        ], 200);
                    }
                } else {
                    $this->response([
                        'value'   => 0,
                        'message' => 'email salah..'
                    ], 200);
                }
            } else {
                $this->response([
                    'value'   => 0,
                    'message' => 'email salah'
                ], 200);
            }
        } else {
            $this->response([
                'value'   => 0,
                'message' => validation_errors()
            ], 200);
        }
    }
}
