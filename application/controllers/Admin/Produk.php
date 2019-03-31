<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (isset($this->session->userdata['logged_in']))
        {
            $email = ($this->session->userdata['logged_in']['email']);
        }else{
            redirect('auth');
        }
    }

    public function index()
    {
        $data['main_content'] = 'admin/list_produk';
        $data['title_dashboard'] = 'Produk';
        $this->load->view('admin/overview', $data);
	}
}
 