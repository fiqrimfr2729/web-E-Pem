<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori_model extends CI_Model
{
    private $_table = "kategori";
    private $_tableProduk = "produk";


    public $id_kategori;
    public $nama_kategori;
    public $id_jenis_kategori;

    public function rules()
    {
        return [
            [
                'field' => 'nama_kategori',
                'label' => 'Nama Kategori',
                'rules' => 'required',
            ]
        ];
    }

    public function getProdukAll()
    {
        return $this->db->get($this->_tableProduk)->result();
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_kategori" => $id])->row();
    }

    public function getByJenis($id_jenis_kategori)
    {
        $query = $this->db->get_where($this->_table, ["id_jenis_kategori" => $id_jenis_kategori])->result();
        return $query;
    }

    public function getByNama($nama_kategori)
    {
        return $this->db->get_where($this->_table, ["nama_kategori" => $nama_kategori])->num_rows();
    }

    public function addKategori($id_jenis, $nama_kategori)
    {
        if ($this->getBynama($nama_kategori) < 1) {
            $this->nama_kategori = $nama_kategori;
            $this->id_jenis_kategori = $id_jenis;
            return $this->db->insert($this->_table, $this);
        } else {
            return false;
        }
    }

    public function deleteKategori($id)
    {
        $query = $this->getProduk($id);
        foreach ($query as $data_produk) {
            $this->deleteProduk($data_produk->id_produk);
        }
        return $this->db->delete($this->_table, array("id_kategori" => $id));
    }


    public function getProduk($id)
    {
        return $this->db->get_where("produk", ["kategori" => $id])->result();
    }

    public function deleteProduk($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete("produk", array("id_produk" => $id));
    }

    private function _deleteImage($id)
    {

        $produk = $this->getProdukId($id);
        $path = 'upload/produk/' . $produk->gambar;
        $this->load->helper("file"); // load the helper
        delete_files($path, true); // delete all files/folders

        rmdir('upload/produk/' . $produk->gambar);
    }

    public function getProdukId($id)
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
}
