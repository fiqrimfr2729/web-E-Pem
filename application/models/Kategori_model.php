<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori_model extends CI_Model
{
    private $_table = "kategori";

    public $id_kategori;
    public $nama_kategori;
    public $id_jenis_kategori;

    public function rules()
    {
        return [
            [
                'field' => 'nama_kategori',
                'label' => 'Nama Kategori',
                'rules' => 'required'
            ]
        ];
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
        return $this->db->get_where($this->_table, ["id_jenis_kategori" => $id_jenis_kategori])->result();
    }

    public function save($id_jenis, $nama_kategori)
    {
        $this->nama_kategori = $nama_kategori;
        $this->id_jenis_kategori = $id_jenis;
        return $this->db->insert($this->_table, $this);
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_kategori" => $id));
    }
}
