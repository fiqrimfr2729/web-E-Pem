<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cara_pesan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('profil_model'));
    }


    public function index()
    {
        /*
        $row = $this->profil_model->getAll();
        $data = array(
            $row => 'row',
            'main_content' => 'admin/cara_pesan',
            'title_dashboard' => 'Cara Pesan'
        );  
        //$data['main_content'] = 'admin/cara_pesan';
        //$data['title_dashboard'] = 'Cara Pesan';
        $this->load->view('admin/overview', $data);

        */
        $this->load->model('profil_model');
        $data['main_content'] = 'admin/cara_pesan';
        $data['title_dashboard'] = 'Cara Pesan';
        $data['profil'] = $this->profil_model->getAll();
        $this->load->view('admin/overview', $data);
    }
}