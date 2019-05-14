<?php
defined('BASEPATH') or exit('No direct script access allowed');


// controller di awali dengan huruf kapital
class Carapesan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('profil_model');
        $this->load->helper('url');
    }

    public function index()
    {
        $data['main_content'] = 'user/cara_pesan';
        $data['title_dashboard'] = 'Cara Pesan';
        $data['profil'] = $this->profil_model->getAll();
        $this->load->view('user/carapesan', $data);

        // user sebagai nama folder nya
        // contact itu untuk mamanggil method untuk urutan tampilan website / sbg Overview nya
        $this->load->view('User/carapesan');
    }
}
