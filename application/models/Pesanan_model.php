<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pesanan_model extends CI_Model
{
    private $_table = 'pesanan';

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
}
