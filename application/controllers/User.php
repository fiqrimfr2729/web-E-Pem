<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	// Bagian buat fungsi index.php
	public function index()
	{
		$this->load->view('user/overview');
	}

}
 