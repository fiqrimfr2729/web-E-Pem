<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Testimoni extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (isset($this->session->userdata['logged_in'])) {
            $email = ($this->session->userdata['logged_in']['email']);
        }else{
              redirect('admin');
        }
        
        $this->load->model('testimoni_model');
        $this->load->library('form_validation');

        
    }

    public function index(){
        $data['testimoni'] = $this->testimoni_model->getAll();

        $data['main_content']='admin/testimoni';
        $data [ 'title_dashboard'] = 'Testimoni';
        $this->load->view('admin/overview',$data) ;
    }

    public function uploadGambar(){
        $gambar= $this->_uploadImage();
        $testimoni = $this->testimoni_model;
        $post= $this->input->post();
        $date = $post['tanggal'];

        if($gambar != false){
            if($testimoni->save($gambar, $date)){
                 $this->session->set_flashdata('success', 'Data berhasil ditambahkan');
                redirect('admin/testimoni');
            }
        }else{
            $this->session->set_flashdata('error', 'Gambar belum dipilih');
            redirect('admin/testimoni');
        }
    }

    public function deleteTestimoni($id){
        if($this->testimoni_model->delete($id)){
            $this->session->set_flashdata('success', 'Data berhasil dihapus');
            redirect('admin/testimoni');
        }
    }

    private function _uploadImage(){

        $config['upload_path']          = './upload/testimoni/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = date("ymdhis");
        $config['overwrite']            = true;
        $config['max_size']             = 1024;

        $this->load->library('upload', $config);

        if($this->upload->do_upload('gambar')){
            return $this->upload->data("file_name");
        }

        return false;
    }
    
}
 