<?php
defined('BASEPATH') or exit('No direct script access allowed');


// controller di awali dengan huruf kapital
class Lihatproduk extends CI_Controller
{
    public function __construct()
    {
		parent::__construct();
	}

    public function index()
    {


        // user sebagai nama folder nya
        // contact itu untuk mamanggil method untuk urutan tampilan website / sbg Overview nya

        $data['title_dashboard'] = 'Produk Bangunan';
        $this->load->view('User/lihatproduk', $data);
    }
}
