<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pesanan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('pesanan_model');
    }

    public function index()
    {

        $data['main_content'] = 'admin/pesanan';
        $data['title_dashboard'] = 'Pesanan';
        $data['pesanan'] = $this->pesanan_model->getPesanan();
        $this->load->view('admin/overview', $data);
    }

    public function infoPesanan($id)
    {
        $pesanan = $this->pesanan_model->getById($id);
        $data['main_content'] = 'admin/info_pesanan';
        $data['title_dashboard'] = 'Info Pesanan';
        $data['pesanan'] = $pesanan;
        $this->load->view('admin/overview', $data);
    }

    public function delete($id)
    {
        if ($this->pesanan_model->deletePesanan($id)) {
            $this->session->set_flashdata('success', 'Data berhasil dihapus');
            redirect(site_url('admin/pesanan'));
        }
    }
}
