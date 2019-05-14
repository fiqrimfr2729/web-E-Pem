<?php 
defined('BASEPATH') or exit('No direct script access allowed');

 // controller di awali dengan huruf kapital
class Testimoni extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
                  
        $this->load->model('testimoni_model');
        $this->load->library('form_validation');
    }


    public function index(){
        $data['testimoni'] = $this->testimoni_model->getAll();

        $data['main_content']='user/testimoni';
        $data [ 'title_dashboard'] = 'Testimoni';
        $this->load->view('user/testimoni',$data) ;
    }

	}


 