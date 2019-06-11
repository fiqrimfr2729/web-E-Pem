<?php
defined('BASEPATH') or exit('No direct script access allowed');


// controller di awali dengan huruf kapital
class Pesancoustems extends CI_Controller
{

    private $_table = "costum";

    public function __construct()
    {
        parent::__construct();
        $this->load->model('pesanan_model');
        $this->load->model('bahan_model');
        $this->load->helper('date');
    }

    public function index()
    {
        // user sebagai nama folder nya
        // contact itu untuk mamanggil method untuk urutan tampilan website / sbg Overview nya
        $data['provinsi'] = $this->pesanan_model->getByProvinsi();
        $data['bahan'] =  $this->bahan_model->getAll();

        $this->load->view('User/pesancoustems', $data);
    }

    public function tambahCostum()
    {
        $this->input->post();
        $this->id = uniqid();
        $this->nama_pemesan = $_POST['nama_pemesan'];
        $this->kota = $_POST['kota'];
        $this->provinsi = $_POST['provinsi'];
        $this->tanggal = $_POST['tanggal'];
        $this->kontak = $_POST['kontak'];
        $this->alamat = $_POST['alamat'];
        $this->bahan = $_POST['bahan'];
        $this->img = $_POST['img'];
        $this->db->insert($this->_table, $this);

        redirect('User/pesancostoums');
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

    public function uploadGambar()
    {
        $gambar = $this->_uploadImage();
        $testimoni = $this->testimoni_model;
        $post = $this->input->post();
        $date = $post['tanggal'];

        if ($gambar != false) {
            if ($testimoni->save($gambar, $date)) {
                $this->session->set_flashdata('success', 'Data berhasil ditambahkan');
                redirect('admin/testimoni');
            }
        } else {
            $this->session->set_flashdata('error', 'Gambar belum dipilih');
            redirect('admin/testimoni');
        }
    }

    private function _uploadImage()
    {

        $config['upload_path']          = './upload/testimoni/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['file_name']            = date("ymdhis");
        $config['overwrite']            = true;
        $config['max_size']             = 1024;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('gambar')) {
            return $this->upload->data("file_name");
        }

        return false;
    }
}
