<?php

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';
use Restserver\Libraries\REST_Controller;

class Pesanan extends REST_Controller
{
    function ubah_status_post()
    {
        $id = $this->post('id');
        $this->db->set('status', 'ST02');
        $this->db->where('id_pesanan', $id);
        $this->db->update('pesanan');

        $this->response([
            'respon'   => false,
            'message' => 'berhasil'
        ], 200);
    }
}
