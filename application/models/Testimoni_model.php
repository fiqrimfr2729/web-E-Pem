<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Testimoni_model extends CI_Model
{
    private $_tabel = 'testimoni';

    public $id_testimoni;
    public $tanggal;
    public $gambar;


    public function getAll()
    {
        return $this->db->get($this->_tabel)->result();
    }

    public function getById($id){
        return $this->db->get_where($this->_tabel, ['id_testimoni'=>$id])->row();
    }

    public function save($gambar, $tanggal)
    {
        $this->gambar = $gambar;
        $this->tanggal = $tanggal;

        return $this->db->insert($this->_tabel, $this);
    }

    

    public function delete($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->_tabel, array("id_testimoni" => $id));
    }

    private function _deleteImage($id){
     
       $testimoni = $this->getById($id);

        $filename = explode(".", $testimoni->gambar)[0];
        return array_map('unlink', glob(FCPATH."upload/testimoni/$filename.*"));
    }
}
 