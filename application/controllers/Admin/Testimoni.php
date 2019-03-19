<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Testimoni extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
		$data['main_content']='admin/testimoni';
		$data['title_dashboard'] = 'Testimoni';
		$this->load->view('admin/overview',$data) ;
	}
}
 