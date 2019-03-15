<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}


	public function index()
	{
		$data['main_content'] = 'User/Home';
		$data['title_PTJatiMakmurMandiri'] = 'Home';
		$this->load->view('User/overview', $data);
	}

}
 