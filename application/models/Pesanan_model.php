<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pesanan_model extends CI_Model
{
    private $_table = 'produk';
    private $_tableKota = 'kota';
    private $_tableProvinsi = 'provinsi';


    public $id_pesanan;
    public $nama_pemesan;
    public $kota;
    public $tanggal;
    public $kontak;
    public $alamat;
    public $status;
    public $produk;

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getByKota($id_propinsi)
    {
        $this->db->order_by('nama_kabkota', 'asc');
        $this->db->where('id_propinsi', $id_propinsi);
        $result = $this->db->get('kota')->result();

        return $result;
    }

    public function getByProvinsi()
    {
        $this->db->order_by('nama_propinsi', 'asc');
        return $this->db->get($this->_tableProvinsi)->result();
    }
}
