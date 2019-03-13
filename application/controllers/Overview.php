<?php
class Overview extends CI_Controller{
    public function __construct(){
        parent::__construct();
    }


    public function index()
    {
        $this->load->view('admin/overview');
    }

    public function produk(){
        $this->load->view('admin/overview');
        //$this->load->view('admin/_partials/breadcrumb');
        $this->load->view('admin/_partials/navbar');
        // $this->load->view('admin/_partials/head_mobile');
        // $this->load->view('admin/_partials/list_produk');
        $this->load->view('admin/_partials/sidebar');
        // $this->load->view('admin/_partials/head');
        $this->load->view('admin/_partials/footer');
    }

    public function kategori(){
       $this->load->view('admin/overview');
        $this->load->view('admin/_partials/head');
        $this->load->view('admin/_partials/sidebar');
        $this->load->view('admin/_partials/navbar');
        $this->load->view('admin/_partials/breadcrumb');
        $this->load->view('admin/_partials/list_kategori');
        $this->load->view('admin/_partials/footer');
    }

}
?>