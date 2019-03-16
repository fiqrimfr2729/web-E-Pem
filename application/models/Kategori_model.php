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
            ],

            [
                'field' => 'id_jenis_kategori',
                'label' => 'Jenis Kategori',
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

    public function save()
    {
        $query = $this->db->get($this->_table);
        $post = $this->input->post();
        $this->id_kategori = 'K'. $query->num_rows();
        $this->nama_kategori = $post['nama_kategori'];
        $this->id_jenis_kategori = $post['id_jenis_kategori'];
        $this->db->insert($this->_table, $this);
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_kategori" => $id));
    }
}
