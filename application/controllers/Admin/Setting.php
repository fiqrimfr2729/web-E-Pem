<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Setting extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
		$data['main_content']='admin/v_setting';
		$data['title_dashboard'] = 'Setting';
		$this->load->view('admin/overview',$data);
	}
}
 