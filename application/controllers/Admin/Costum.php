<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Costum extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('costum_model');
    }

    public function index()
    {

        $data['main_content'] = 'admin/list_costum';
        $data['title_dashboard'] = 'Pesanan-costum';
        $data['pesanan'] = $this->costum_model->getPesanan();
        $this->load->view('admin/overview', $data);
    }

    public function infoPesanan($id)
    {
        $pesanan = $this->costum_model->getById($id);
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
