<?php
defined('BASEPATH') or exit('No direct script access allowed');


// controller di awali dengan huruf kapital
class Pesansekarang extends CI_Controller
{

    private $_table = "pesanan";

    public function __construct()
    {
        parent::__construct();
        $this->load->model('pesanan_model');
        $this->load->helper('date');
    }

    public function index()
    {

        //$data['produk'] = $this->pesanan_model->getAll();
        $data['kota'] = $this->pesanan_model->getByKota();
        $data['profinsi'] = $this->pesanan_model->getByProvinsi();

        // user sebagai nama folder nya
        // contact itu untuk mamanggil method untuk urutan tampilan website / sbg Overview nya
        $this->load->view('User/pesansekarang', $data);
    }

    public function tambahPesan()
    {
        $this->input->post();
        $this->id_pesanan = uniqid();
        $this->nama_pemesan = $_POST['nama_pemesan'];
        $this->kota = $_POST['kota'];
        $this->tanggal = $_POST['tanggal'];
        $this->kontak = $_POST['kontak'];
        $this->alamat = $_POST['alamat'];
        $this->produk = $_POST['produk'];
        $this->db->insert($this->_table, $this);

        redirect('User/pesansekarang');
    }
}
