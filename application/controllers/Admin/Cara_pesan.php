<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Cara_pesan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['main_content'] = 'admin/cara_pesan';
        $data['title_dashboard'] = 'Cara Pesan';
        $this->load->view('admin/overview', $data);
	}
}
 