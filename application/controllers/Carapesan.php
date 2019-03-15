<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Carapesan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}


	public function index()
	{
		$data['main_content'] = 'User/Bacacarapesan';
		$data['title_PTJatiMakmurMandiri'] = 'Bacacarapesan';
		$this->load->view('User/overview', $data);
	}

}
 