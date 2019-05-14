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

    public function getByKota()
    {
        return $this->db->get($this->_tableKota)->result();
    }

    public function getByProvinsi()
    {
        return $this->db->get($this->_tableProvinsi)->result();
    }
}
