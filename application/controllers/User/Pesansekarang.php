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
        $this->load->model('bahan_model');
        $this->load->helper('date');
    }

    public function index()
    {

        //$data['produk'] = $this->pesanan_model->getAll();
        //$data['kota'] = $this->pesanan_model->getByKota();
        $data['provinsi'] = $this->pesanan_model->getByProvinsi();
        $data['bahan'] =  $this->bahan_model->getAll();


        // user sebagai nama folder nya
        // contact itu untuk mamanggil method untuk urutan tampilan website / sbg Overview nya
        $this->load->view('User/pesansekarang', $data);
    }

    public function tambahProduk()
    {
        $this->input->post();
        $this->produk = $_POST['produk'];

        $this->load->view('User/pesansekarang', $this);
    }

    public function tambahPesan()
    {
        $this->input->post();
        //$this->id_pesanan = uniqid();
        $this->nama_pemesan = $_POST['nama_pemesan'];
        $this->kota = $_POST['kota'];
        $this->tanggal = $_POST['tanggal'];
        $this->kontak = $_POST['kontak'];
        $this->alamat = $_POST['alamat'];
        $this->bahan = $_POST['bahan'];
        $this->status = "ST01";

        $this->produk = $_POST['produk'];
        $this->db->insert($this->_table, $this);

        redirect('User/pesansekarang');
    }

    public function listKota()
    {
        // Ambil data ID Provinsi yang dikirim via ajax post
        $id_provinsi = $this->input->post('id_propinsi');

        $kota = $this->pesanan_model->getByKota($id_provinsi);

        // Buat variabel untuk menampung tag-tag option nya
        // Set defaultnya dengan tag option Pilih
        $lists = "<option value=''>Pilih</option>";

        foreach ($kota as $data) {
            $lists .= "<option value='" . $data->id_kabkota . "'>" . $data->nama_kabkota . "</option>"; // Tambahkan tag option ke variabel $lists
        }

        $callback = array('list_kota' => $lists); // Masukan variabel lists tadi ke dalam array $callback dengan index array : list_kota

        echo json_encode($callback); // konversi varibael $callback menjadi JSON

    }
}
