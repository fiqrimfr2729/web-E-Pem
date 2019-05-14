<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index(){

        $this->load->model('profil_model');
        $data['main_content'] = 'admin/Profil_perusahaan';
        $data['title_dashboard'] = 'Tentang';
        $data['profil'] = $this->profil_model->getAll();
        $this->load->view('admin/overview', $data);
		
        
    }

}
