
<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Tentang extends CI_Controller{
    function __construct(){
		parent::__construct();		
		$this->load->model('m_data_model');
                $this->load->helper('url');
	}
 
    

	function index(){
		$data['tentang'] = $this->m_data_model->tampil_data()->result();
		$this->load->view('profil_perusahaan',$data);
	}
}
