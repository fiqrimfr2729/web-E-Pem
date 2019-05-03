<?php 
defined('BASEPATH') or exit('No direct script access allowed');


 // controller di awali dengan huruf kapital
class Bahanproduk extends CI_Controller
{
    public function __construct()
    {
        
        parent::__construct();
        if (isset($this->session->userdata['logged_in'])) {
            $email = ($this->session->userdata['logged_in']['email']);
        } else {
            redirect('admin');
        }
        $this->load->model('Bahan_model');
        $this->load->library('form_validation');
    }

    public function index(){
        
        
        // user sebagai nama folder nya
        // contact itu untuk mamanggil method untuk urutan tampilan website / sbg Overview nya
        $data['title_dashboard'] = 'Bahan Produk';
        $data['main_content'] = 'User/bahanproduk';
        $data['bahan'] = $this->Bahan_model->getAll();
        $this->load->view('User/bahanproduk', $data);
    }
    
    
}
 