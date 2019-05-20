<?php 
defined('BASEPATH') or exit('No direct script access allowed');


 // controller di awali dengan huruf kapital
class Mebel extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();  
        $this->load->model('Model_mebel');      
    }

	public function index()
	{
       
		$data['produk'] = $this->Model_mebel->all();
		$this->load->view('user/mebel', $data);
	}
	
	public function add_to_cart($id_produk)
	{
		$produk = $this->Model_mebel->find($id_produk);
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
	
	public function cart(){
		$this->load->view('show_cart');
	}
	
	public function clear_cart()
	{
		$this->cart->destroy();
		redirect(base_url());
	}
	
}
 
 