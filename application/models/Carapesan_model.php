<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Carapesan_model extends CI_Model{

    function getAll(){
        // mereturn seluruh data dari tabel siswa
        return $this->db->get('carapesan');
    }

}