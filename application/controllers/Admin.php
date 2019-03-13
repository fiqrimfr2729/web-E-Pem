<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
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

	public function produk()
	{
		$data['main_content'] = 'admin/_partials/list_produk';
		$data['title_dashboard'] = 'Produk';
		$this->load->view('admin/overview', $data);
	}

	public function kategori()
	{
		$data['main_content'] = 'admin/_partials/list_kategori';
		$data['title_dashboard'] = 'Kategori';
		$this->load->view('admin/overview', $data);
	}
}
 