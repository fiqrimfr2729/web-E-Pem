<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Pesanan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
		
		$data['main_content']='admin/pesanan';
		$data['title_dashboard'] = 'Pesanan';
		$this->load->view('admin/overview',$data);
	}
}
 