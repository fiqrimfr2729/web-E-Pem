<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelola_akun extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_kelola_akun');
        $this->load->library('form_validation');
    }

    public function index()
    {
        //$data['main_content']='admin/v_setting';
        //$data['title_dashboard'] = 'Kelola Akun';
        $user = $this->m_kelola_akun->get_all();
        $data = array(
            'user_data' => $user,
            'main_content' => 'admin/v_setting',
            'title_dashboard' => 'Kelola Akun'

        );
        $this->load->view('admin/overview', $data);
    }


    public function read($id)
    {
        $row = $this->m_kelola_akun->get_by_id($id);
        if ($row) {
            $data = array(
                'id' => $row->id,
                'email' => $row->email,
                'password' => $row->password,
                'main_content' => 'admin/v_setting',
                'title_dashboard' => 'View'
            );
            $this->load->view('admin/overview', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('kelola_akun'));
        }
    }

    public function create()
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('kelola_akun/create_action'),
            'id_jurusan' => set_value('id'),
            'jurusan' => set_value('email'),
            'main_content' => 'admin/v_setting',
            'title_dashboard' => 'View'
        );
        $this->template->load('v_form_akun', $data);
    }

    public function create_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
                'user' => $this->input->post('user', TRUE),
            );

            $this->Jurusan_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('kelola_akun'));
        }
    }

    public function update($id)
    {
        $row = $this->m_kelola_akun->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('admin/kelola_akun/update_action'),
                'id' => set_value('id', $row->id),
                'email' => set_value('email', $row->email),
                'password' => set_value('password', $row->password),
                'main_content' => 'admin/kelolaAkun/v_form_akun',
                'title_dashboard' => 'View'
            );
            $this->load->view('admin/overview', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('kelola_akun'));
        }
    }

    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
            $this->update($this->input->post('password', TRUE));
        } else {
            $data = array(
                'email' => $this->input->post('email', TRUE),
                'password' => $this->input->post('password', TRUE),
            );

            $this->Jurusan_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('kelola_akun'));
        }
    }

    public function delete($id)
    {
        $row = $this->m_kelola_akun->get_by_id($id);

        if ($row) {
            $this->Jurusan_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('kelola_akun'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('kelola_akun'));
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('email', 'email', 'trim|required');

        $this->form_validation->set_rules('id', 'id', 'trim');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function changePwd()
    {
        //$data['main_content']='admin/v_setting';
        //$data['title_dashboard'] = 'Kelola Akun';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data = array(
            'user' => $user,
            'main_content' => 'admin/',
            'title_dashboard' => 'Change Password '

        );


        /*
        $data['title'] = 'Ganti Password';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['main_content'] = 'admin/kelola_akun/changePwd';
        */
        $this->load->view('admin/overview', $data);
    }
}
