<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bahan_produk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Bahan_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title_dashboard'] = 'Bahan Produk';
        $data['main_content'] = 'admin/list_bahan';
        $data['bahan'] = $this->Bahan_model->getAll();
        $this->load->view('admin/overview', $data);
    }

    public function addBahan(){
        $bahan = $this->Bahan_model;
        $validation = $this->form_validation;
        $validation->set_rules($bahan->rules());

        if($validation->run() == false){
            $this->session->set_flashdata('error','Data sudah ada');
            redirect('admin/bahan_produk');
        }else{
            $post = $this->input->post();
            $nama_bahan = $post['nama_bahan'];
            if($bahan->save($nama_bahan)){
                $this->session->set_flashdata('success','Data berhasil ditambahkan');
                redirect('admin/bahan_produk');
            }
        }
    }

    public function update($id){
        if (!isset($id)) show_404();
        if($this->Bahan_model->update($id)){
            redirect('admin/bahan_produk');
        }
    }

    public function delete($id){
        if (!isset($id)) show_404();

        if ($this->Bahan_model->delete($id)) {
            $this->session->set_flashdata('success', 'Data berhasil dihapus');
            redirect('admin/bahan_produk');
        }
    }
}
 