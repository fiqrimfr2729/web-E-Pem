<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori_model extends CI_Model
{
    private $_table = "user";

    public $id_akun;
    public $email;
    public $password;

    public function rules()
    {
        return [
            [
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'required'
            ],

            [
                'field' => 'password',
                'label' => 'Password',
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
        return $this->db->get_where($this->_table, ["id" => $id])->result();
    }

    public function save()
    {
        $query = $this->db->get($this->_table);
        $post = $this->input->post();
        $this->id_akun = 'K' . $query->num_rows();
        $this->email = $post['email'];
        $this->password = $post['password'];
        $this->db->insert($this->_table, $this);
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id" => $id));
    }
}
