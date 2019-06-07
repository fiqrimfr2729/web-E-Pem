<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk_model extends CI_Model
{
    private $_table = "produk";

    public $id_produk;
    public $nama_produk;
    public $deskripsi;
    public $gambar;
    public $kategori;

    public function rules()
    {
        return [
            [
                'field' => 'nama_produk',
                'label' => 'Nama Produk',
                'rules' => 'required',
            ],
            [
                'field' => 'kategori',
                'label' => 'Kategori',
                'rules' => 'required',
            ]
        ];
    }
    

    public function getProduk($id_jenis_kategori)
    {
        $this->db->select('*');
        $this->db->from('produk');
        $this->db->join('kategori', 'produk.kategori = kategori.id_kategori', 'inner');
        $this->db->where('id_jenis_kategori', $id_jenis_kategori);
        $query = $this->db->get()->result();
        foreach ($query as $data_query) {
            $kategori = new Kategori_model();
            $data_query->kategori = $kategori->getById($data_query->kategori);
        }
        return $query;
    }

    public function getById($id)
    {
        $this->db->select('*');
        $this->db->from('produk');
        $this->db->join('kategori', 'produk.kategori = kategori.id_kategori', 'inner');
        $this->db->where('id_produk', $id);
        $query = $this->db->get()->row();
        $kategori = new Kategori_model();
        $query->kategori = $kategori->getById($query->kategori);

        return $query;
    }


    public function addProduk($nama_produk, $deskripsi, $kategori, $gambar)
    {
        $this->nama_produk = $nama_produk;
        $this->deskripsi = $deskripsi;
        $this->kategori = $kategori;
        $this->gambar = $gambar;

        return $this->db->insert($this->_table, $this);
    }

    public function deleteProduk($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array("id_produk" => $id));
    }

    public function updateProduk($id, $nama_produk, $deskripsi, $kategori, $gambar)
    {
        $this->id_produk = $id;
        $this->nama_produk = $nama_produk;
        $this->deskripsi = $deskripsi;
        $this->kategori = $kategori;
        $this->gambar = $gambar;

        return $this->db->update($this->_table, $this, array('id_produk' => $id));
    }

    private function _deleteImage($id)
    {

        $produk = $this->getById($id);
        $path = 'upload/produk/' . $produk->gambar;
        $this->load->helper("file"); // load the helper
        delete_files($path, true); // delete all files/folders

        rmdir('upload/produk/' . $produk->gambar);
    }

    public function all(){
		$hasil = $this->db->get('produk');
		if($hasil->num_rows() > 0){
			return $hasil->result();
		} else {
			return array();
		}
	}
	
	
}
