<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (isset($this->session->userdata['logged_in']))
        {
            $email = ($this->session->userdata['logged_in']['email']);
        }else{
            header("location: auth");
        }
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
        $data['main_content'] = 'admin/dashboard';
        $data['title_dashboard'] = 'Dashboard';
        $this->load->view('admin/overview', $data);
	}
}
 