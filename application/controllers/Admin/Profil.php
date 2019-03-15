<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
		$data['main_content']='admin/_partials/form';
		$data['title_dashboard'] = 'Profil Perusahaan';
		$this->load->view('admin/overview',$data)  ;
	}
}
 