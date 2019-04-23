<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Bahan_model extends CI_model
{
    private $_table = 'bahan';

    public $id_bahan;
    public $nama_bahan;
    public $status_bahan;

    public function rules()
    {
        return [
            [
                'field' => 'nama_bahan',
                'label' => 'Nama Bahan',
                'rules' => 'required',
                'rules' => 'is_unique[bahan.nama_bahan]'
            ]
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id){
        return $this->db->get_where($this->_table, ['id_bahan' => $id])->row();
    }

    public function save($nama_bahan)
    {
        $this->nama_bahan=$nama_bahan;
        $this->status_bahan=true;
        return $this->db->insert($this->_table, $this);
    }

    public function update($id){
        $this->id_bahan = $this->getById($id)->id_bahan;
        $this->nama_bahan = $this->getById($id)->nama_bahan;
        if($this->getById($id)->status_bahan == true){
            $this->status_bahan=false;
        }else{
            $this->status_bahan=true;
        }
        return $this->db->update($this->_table, $this, array('id_bahan' => $id));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_bahan" => $id));
    }
}
 
?>