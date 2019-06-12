<?php
defined('BASEPATH') or exit('No direct script access allowed');


// controller di awali dengan huruf kapital
class Bedug extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Produk_model');
        $this->load->model('kategori_model');
    }

    public function index()
    {
        $data['produk'] = $this->Produk_model->all();
        $this->load->view('User/bedug', $data);
    }

    public function add_to_cart($id)
    {
        $produk = $this->Produk_model->find($id);
        $data = array(
            'id_produk'      => $produk->id_produk,
            'nama_produk'   => $produk->nama_produk,
            'deskripsi'    => $produk->deskripsi,
            'kategori'    => $produk->kategori,
            'gambar'    => $produk->gambar
        );

        $this->cart->insert($data);
        redirect(base_url());
    }

    public function infoProduk($id)
    {
        $data['main_content'] = 'admin/info_produk';
        $data['data_produk'] = $this->produk_model->getById($id);
        $data['id_produk'] = $id;
        $data['coba'] = $this->produk_model->getById($id)->nama_produk;
        $data['gambar_produk'] = $this->produk_model->getById($id)->gambar;
        $data['info_kategori'] = 'Produk Bedug';
        $data['title_dashboard'] = 'Info Produk';
        $this->load->view('admin/overview', $data);
    }
}
