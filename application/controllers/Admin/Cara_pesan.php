<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cara_pesan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('profil_model');
        $this->load->helper('url');
        $this->load->library('form_validation');

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
        
        $data['main_content'] = 'admin/cara_pesan';
        $data['title_dashboard'] = 'Cara Pesan';
        $data['profil'] = $this->profil_model->getAll();
        $this->load->view('admin/overview', $data);
    }

    public function update()
    {
       $this->profil_model->updateCara_pesan();
    }

    
    
    
}
