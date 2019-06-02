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
        $pesanan = $this->db->get($this->_table)->result();
        foreach ($pesanan as $data_pesanan) {
            $kota = $this->db->get_where('kota', ['id_kabkota' => $data_pesanan->kota])->row();
            $data_pesanan->kota = $kota;

            $produk = $this->db->get_where('produk', ['id_produk' => $data_pesanan->produk])->row();
            $data_pesanan->produk = $produk;

            $status = $this->db->get_where('status_pesanan', ['id_status_pesanan' => $data_pesanan->status])->row();
            $data_pesanan->status = $status;
        }
        return $pesanan;
    }

    public function getById($id)
    {
        $pesanan = $this->db->get_where('pesanan', ['id_pesanan' => $id])->row();

        $kota = $this->db->get_where('kota', ['id_kabkota' => $pesanan->kota])->row();
        $pesanan->kota = $kota->nama_kabkota;

        $produk = $this->db->get_where('produk', ['id_produk' => $pesanan->produk])->row();
        $pesanan->produk = $produk;

        $status = $this->db->get_where('status_pesanan', ['id_status_pesanan' => $pesanan->status])->row();
        $pesanan->status = $status->nama_status_pesanan;

        return $pesanan;
    }

    public function deletePesanan($id)
    {
        return $this->db->delete($this->_table, array("id_pesanan" => $id));
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
