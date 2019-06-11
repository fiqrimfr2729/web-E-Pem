<?php
defined('BASEPATH') or exit('No direct script access allowed');


// controller di awali dengan huruf kapital
class Lihatbarang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('kategori_model');
        $this->load->model('produk_model');
    }

    public function index()
    {


        // user sebagai nama folder nya
        // contact itu untuk mamanggil method untuk urutan tampilan website / sbg Overview nya
        $data['main_content'] = 'user/lihatbarang';
        $data['title_dashboard'] = 'Produk Mebel';
        $data['jenis'] = 'produk_mebel';
        $data['kategori'] = $this->kategori_model->getByJenis("JK02");
        $data['produk'] = $this->produk_model->getProduk("JK02");
        $this->load->view('User/lihatbarang', $data);
    }

    public function infoProduk($id)
    {
        $data['main_content'] = 'user/lihatbarang';
        $data['data_produk'] = $this->produk_model->getById($id);
        $data['id_produk'] = $id;
        $data['coba'] = $this->produk_model->getById($id)->nama_produk;
        $data['gambar_produk'] = $this->produk_model->getById($id)->gambar;
        $data['kategori'] = $this->produk_model->getById($id)->kategori;
        $data['info_kategori'] = 'Produk Mebel';
        $data['title_dashboard'] = 'Info Produk';
        $this->load->view('User/lihatbarang', $data);
    }
}
