<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
		$data['main_content']='admin/Profil_Perusahaan';
		$data['title_dashboard'] = 'Tentang';
        $this->load->view('admin/overview',$data)  ;
        
    }

}
