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
        $this->img = $this->_uploadImage();
        $this->input->post();
        $this->nama_pemesan = $_POST['nama_pemesan'];
        $this->kota = $_POST['kota'];
        $this->provinsi = $_POST['provinsi'];
        $this->tanggal = $_POST['tanggal'];
        $this->kontak = $_POST['kontak'];
        $this->alamat = $_POST['alamat'];
        $this->bahan = $_POST['bahan'];
        $this->status_pesanan = 'ST01';

        if ($this->img != false) {
            $this->db->insert($this->_table, $this);
            $this->session->set_flashdata('success', 'Pesanan berhasil');
            redirect('User/pesancoustems');
        } else {
            $this->session->set_flashdata('error', 'Upload gambar gagal');
            redirect('User/pesancoustems');
        }
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



    private function _uploadImage()
    {
        $date = date("ymdhis");
        mkdir('./upload/produk/' . $date . '/thumbnail/', 0777, true);
        $config['upload_path']          = './upload/costum/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['file_name']            = $date . '.png';

        $config['max_size']             = 5120;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if ($this->upload->do_upload('gambar')) {
            return $date;
        } else {
            return false;
        }
    }
}
