<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Costum_model extends CI_Model
{
    private $_table = 'costum';
    private $_tableKota = 'kota';
    private $_tableProvinsi = 'provinsi';


    public $id;
    public $nama_pemesan;
    public $kota;
    public $provinsi;
    public $tanggal;
    public $kontak;
    public $alamat;
    public $bahan;
    public $img;
    public $status_pesanan;


    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function addCostum($nama, $kota, $provinsi, $tanggal, $kontak, $alamat, $bahan, $img)
    {
        $this->nama_pemesan = $nama;
        $this->kota = $kota;
        $this->provinsi = $provinsi;
        $this->tanggal = $tanggal;
        $this->kontak = $kontak;
        $this->alamat = $alamat;
        $this->bahan = $bahan;
        $this->img = $img;
        $this->status_pesanan = 'ST01';

        return $this->db->insert($this->_table, $this);
    }

    public function getPesanan()
    {
        $pesanan = $this->db->get($this->_table)->result();

        foreach ($pesanan as $pesan) {

            $pesan->kota = $this->db->get_where('kota', ['id_kabkota' => $pesan->kota])->row();
            $pesan->bahan = $this->db->get_where('bahan', ['id_bahan' => $pesan->bahan])->row();
        }

        return $pesanan;
    }

    public function getById($id)
    {
        $pesanan = $this->db->get_where($this->_table, ['id' => $id])->row();


        $pesanan->kota = $this->db->get_where('kota', ['id_kabkota' => $pesanan->kota])->row();
        $pesanan->bahan = $this->db->get_where('bahan', ['id_bahan' => $pesanan->bahan])->row();


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
