<?php

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';
use Restserver\Libraries\REST_Controller;

class Kategori extends REST_Controller
{

    function __construct($config = 'rest')
    {
        parent::__construct($config);
        $this->load->database();
    }

    //Menampilkan data kontak
    function kategori_get()
    {
        $id = $this->get('id');
        if ($id == '') {
            $kategori = $this->db->get('kategori')->result();
        } else {
            $this->db->where('id_kategori', $id);
            $kategori = $this->db->get('kategori')->result();
        }
        $this->response($kategori, REST_Controller::HTTP_OK);
    }

    function kategoriByJenis_get()
    {
        $id = $this->get('id_jenis');
        if ($id == '') {
            $kategori = $this->db->get('kategori')->result();
        } else {
            $this->db->where('id_jenis_kategori', $id);
            $kategori = $this->db->get('kategori')->result();
        }
        $this->response($kategori, REST_Controller::HTTP_OK);
    }

    function kategori_post()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('', '');

        $config = array(
            array(
                'field' => 'id_jenis_kategori',
                'label' => 'ID Jenis Kategori',
                'rules' => 'required'
            ),
            array(
                'field' => 'nama_kategori',
                'label' => 'nama kategori',
                'rules' => 'required|is_unique[kategori.nama_kategori]|alpha_numeric_spaces',
                'errors' => array(
                    'required' => 'Anda belum memasukan %s.',
                    'is_unique' => 'Nama kategori sudah ada.',
                    'alpha_numeric_spaces' => 'Format nama kategori salah'
                ),
            )
        );
        $this->form_validation->set_rules($config);

        $data = array(
            'id_jenis_kategori' => $this->post('id_jenis_kategori'),
            'nama_kategori' => $this->post('nama_kategori')
        );

        if ($this->form_validation->run() != false) {
            $insert = $this->db->insert('kategori', $data);
            if ($insert) {
                $this->response([
                    'respon' => true,
                ], 200);
            } else {
                $this->response(array('status' => 'fail', 502));
            }
        } else {

            $this->response([
                'respon'   => false,
                'message' => validation_errors()
            ], 200);
        }
    }

    function kategori_delete()
    {
        $id = $this->delete('id');

        $this->db->where('kategori', $id);
        $produk = $this->db->get('produk')->result();

        foreach ($produk as $data_produk) {
            $path = 'upload/produk/' . $data_produk->gambar;
            $this->load->helper("file"); // load the helper
            delete_files($path, true); // delete all files/folders

            rmdir('upload/produk/' . $data_produk->gambar);
        }

        $this->db->where('id_kategori', $id);
        $delete = $this->db->delete('kategori');

        if ($delete) {
            $this->response([
                'respon' => true
            ]);
        } else {
            $this->response([
                'respon' => false
            ]);
        }
    }

    //Masukan function selanjutnya disini
}
