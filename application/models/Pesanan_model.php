<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pesanan_model extends CI_Model
{
    private $_table = 'pesanan';
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
    public $gambar;

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getPesanan()
    {
        $pesanan = $this->db->get($this->_table)->result();

        foreach ($pesanan as $pesan) {
            $pesan->kota = $this->db->get_where('kota', ['id_kabkota' => $pesan->kota])->row();
        }

        return $pesanan;
    }

    public function getById($id)
    {
        $pesanan = $this->db->get_where($this->_table, ['id_pesanan' => $id])->row();


        $pesanan->kota = $this->db->get_where('kota', ['id_kabkota' => $pesanan->kota])->row();


        return $pesanan;
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

    public function save($gambar)
    {
        $this->gambar = $gambar;

        return $this->db->insert($this->_tabel, $this);
    }
}
