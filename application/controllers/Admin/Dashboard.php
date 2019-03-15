<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['main_content'] = 'admin/dashboard';
        $data['title_dashboard'] = 'Dashboard';
        $this->load->view('admin/overview', $data);
	}
}
 