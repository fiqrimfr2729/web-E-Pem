<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('kategori_model');
        $this->load->library('form_validation');
    }

    public function mebel()
    {
        $kategori = $this->kategori_model;
        $validation = $this->form_validation;
        $validation->set_rules($kategori->rules());

        if($validation->run() == false){
            $data['kategori'] = $this->kategori_model->getByJenis("JK02");

            $data['main_content'] = 'admin/list_kategori';
            $data['title_dashboard'] = 'Mebel';
            $this->load->view('admin/overview', $data);
        }else{
            $post = $this->input->post();
            $nama_kategori= $post['nama_kategori'];;
            $this->add('mebel', $nama_kategori);
        }
     }

    public function kusen()
    {
        $kategori = $this->kategori_model;
        $validation = $this->form_validation;
        $validation->set_rules($kategori->rules());

        if($validation->run() == false){
            $data['kategori'] = $this->kategori_model->getByJenis("JK01");
            
            $data['main_content'] = 'admin/list_kategori';
            $data['title_dashboard'] = 'Kusen';
            $this->load->view('admin/overview', $data);
        }else{
            $post = $this->input->post();
            $nama_kategori= $post['nama_kategori'];;
            $this->add('kusen', $nama_kategori);
        }
        
    }
    

    public function add($jenis, $nama_kategori){
        $kategori = $this->kategori_model;
        if($jenis=='kusen'){
            if($kategori->save('JK01', $nama_kategori)){
                $this->session->set_flashdata('success','Data berhasil ditambahkan');
                redirect('admin/kategori-'.$jenis);
            }else{
                $this->session->set_flashdata('error', 'Data sudah ada');
                redirect('admin/kategori-' . $jenis);
            }
        }else{
           if($kategori->save('JK02', $nama_kategori)){
                $this->session->set_flashdata('success','Data berhasil ditambahkan');
                redirect('admin/kategori-'.$jenis);
           }else{
                $this->session->set_flashdata('error','Gagal');
                redirect('admin/kategori-'.$jenis);
           }
        }  
    }

    public function delete($id=null, $nama_kategori)
    {
        if (!isset($id)) show_404();

        if ($this->kategori_model->delete($id)) {
            $this->session->set_flashdata('success', 'Data berhasil dihapus');
            redirect(site_url('admin/kategori-'. strtolower($nama_kategori)));
        }
    }


    
}
 