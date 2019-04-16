<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk_mebel extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (isset($this->session->userdata['logged_in'])) {
            $email = ($this->session->userdata['logged_in']['email']);
        } else {
            redirect('admin');
        }

        $this->load->model('kategori_model');
        $this->load->model('produk_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['main_content'] = 'admin/list_produk';
        $data['title_dashboard'] = 'Produk Mebel';
        $data['jenis'] = 'produk_mebel';
        $data['kategori'] = $this->kategori_model->getByJenis("JK02");
        $data['produk'] = $this->produk_model->getProduk("JK02");
        $this->load->view('admin/overview', $data);
    }

    public function tambahProduk()
    {
        $produk = $this->produk_model;
        $validation = $this->form_validation;
        $validation->set_rules($produk->rules());

        if ($validation->run() == false) {
            $this->session->set_flashdata('error', 'Data produk gagal ditambahkan');
            redirect('admin/produk-mebel');
        } else {
            $gambar = $this->_uploadImage();
            $post = $this->input->post();
            $nama = $post['nama_produk'];
            $deskripsi = $post['deskripsi'];
            $kategori = $post['kategori'];

            if ($gambar != false) {
                if ($produk->addProduk($nama, $deskripsi, $kategori, $gambar)) {
                    $this->session->set_flashdata('success', 'Data berhasil ditambahkan');
                    redirect('admin/produk-mebel');
                }
            } else {
                $this->session->set_flashdata('error', 'Gambar tidak ada');
                redirect('admin/produk-mebel');
            }
        }
    }

    public function infoProduk($id)
    {
        $data['main_content'] = 'admin/info_produk';
        $data['data_produk'] = $this->produk_model->getById($id);
        $data['coba'] = $this->produk_model->getById($id)->nama_produk;
        $data['nama_kategori'] = 'Produk Mebel';
        $data['title_dashboard'] = 'Info Produk';
        $this->load->view('admin/overview', $data);
    }

    public function hapusProduk($id)
    {
        if ($this->produk_model->deleteProduk($id)) {
            $this->session->set_flashdata('success', 'Data berhasil dihapus');
            redirect('admin/produk-mebel');
        }
    }

    private function _uploadImage()
    {
        $date = date("ymdhis");
        mkdir('./upload/produk/' . $date . '/thumbnail/', 0777, true);
        $config['upload_path']          = './upload/produk/' . $date . '/thumbnail/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $date . ".png";

        $config['max_size']             = 5120;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if ($this->upload->do_upload('gambar')) {
            return $date;
        } else {
            rmdir('./upload/produk/' . $date . '/thumbnail/');
            rmdir('./upload/produk/' . $date);
            return false;
        }
    }
}
