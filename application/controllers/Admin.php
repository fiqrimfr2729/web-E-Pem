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
		$data['main_content'] = 'admin/list_produk';
		$data['title_dashboard'] = 'Produk';
		$this->load->view('admin/overview', $data);
	}

	public function kategori_kusen()
	{
		$data['main_content'] = 'admin/list_kategori';
		$data['title_dashboard'] = 'Kusen';
		$this->load->view('admin/overview', $data);
	}

	public function kategori_mebel()
	{
		$data['main_content'] = 'admin/list_kategori';
		$data['title_dashboard'] = 'Mebel';
		$this->load->view('admin/overview', $data);
	}

	public function pesanan(){
		
		$data['main_content']='admin/pesanan';
		$data['title_dashboard'] = 'Pesanan';
		$this->load->view('admin/overview',$data);
	}

	public function cara_pesan(){

		$data['main_content']='admin/cara_pesan';
		$data['title_dashboard'] ='Cara Pesan';
		$this->load->view('admin/overview',$data);

	}

	public function testimoni(){

		$data['main_content']='admin/testimoni';
		$data['title_dashboard'] = 'Testimoni';
		$this->load->view('admin/overview',$data) ;
	}

	public function profil(){

		$data['main_content']='admin/profil_perusahaan';
		$data['title_dashboard'] = 'Profil Perusahaan';
		$this->load->view('admin/overview',$data)  ;
	}
}
 