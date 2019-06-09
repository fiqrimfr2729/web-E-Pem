<?php 
defined('BASEPATH') or exit('No direct script access allowed');


 // controller di awali dengan huruf kapital
class Bangunan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Produk_model');      
    }

    public function index(){
        
        $data['produk'] = $this->Produk_model->all();
		$this->load->view('User/bangunan', $data) ;
    }
    
    public function add_to_cart($id_kategori)
	{
		$produk = $this->Produk_model->find($id_kategori);
		$data = array(
					   'id_produk'      => $produk->id_produk,
					   'nama_produk'   => $produk->nama_produk,
                       'deskripsi'    => $produk->deskripsi,
                       'kategori'    => $produk->kategori,
                       'gambar'    => $produk->gambar
					);
 
		$this->cart->insert($data);
		redirect(base_url());
	}
}
 