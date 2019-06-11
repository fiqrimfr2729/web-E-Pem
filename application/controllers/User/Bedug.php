<?php
defined('BASEPATH') or exit('No direct script access allowed');


<<<<<<< HEAD:application/controllers/User/Bedug.php
 // controller di awali dengan huruf kapital
class Bedug extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();  
        $this->load->model('Produk_model');      
    }

	public function index()
	{       
		$data['produk'] = $this->Produk_model->all();
		$this->load->view('User/bedug', $data);
	}
	
	public function add_to_cart($id)
	{
		$produk = $this->Produk_model->find($id);
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
 
 
=======
// controller di awali dengan huruf kapital
class Dasboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Produk_model');
    }

    public function index()
    {

        $data['produk'] = $this->Produk_model->getProdukUser('JK03');
        $this->load->view('User/dasboard', $data);
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
>>>>>>> e3a425f3a749f7d355d8ea78a832ae5ac6ebe169:application/controllers/User/Dasboard.php
