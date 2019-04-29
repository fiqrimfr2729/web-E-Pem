
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil_model extends CI_Model
{

    public $_table = "profil";


    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getProfil()
    {
        $this->db->get('profil')->result();
        $carapesan = $profil[0]->cara_pesan;
        return $carapesan;
    }

    public function updateCara_pesan()
    {
        $cara_pesan = $this->input->post('cara_pesan');

        $this->db->set('caraPesan', $cara_pesan);
        $this->db->update('profil');
        $this->session->set_flashdata('success', 'Data berhasil diubah!!!');

        redirect(site_url('admin/cara_pesan'));
    }
}
