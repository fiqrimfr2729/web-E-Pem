<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class profil_model extends CI_model
{
    public $_table = "profil";
    public $cPesan = "caraPesan";

    public function getAll(){
        return $this->db->get($this->_table)->result();
    }

    public function getNama($cPesan){
        return $this->db->get_where($this->_table, ["caraPesan" => $cPesan])->result();
    }
    

}