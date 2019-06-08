_products.php
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_mebel extends CI_Model {
    public function all(){
		$hasil = $this->db->get('produk');
		if($hasil->num_rows() > 0){
			return $hasil->result();
		} else {
			return array();
		}
	}
	
	public function find($id){
		//Query mencari record berdasarkan ID-nya
		$hasil = $this->db->where('id_produk', $id_produk)
						  ->get('produk');
		if($hasil->num_rows() > 0){
			return $hasil->row();
		} else {
			return array();
		}
	}	
	
}
