<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bahan_produk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title_dashboard'] = 'Bahan Produk';
        $data['main_content'] = 'admin/bahan_produk';
        $this->load->view('admin/overview', $data);
    }
}
 