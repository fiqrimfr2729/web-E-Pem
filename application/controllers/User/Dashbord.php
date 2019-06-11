<?php 
defined('BASEPATH') or exit('No direct script access allowed');


 // controller di awali dengan huruf kapital
class Dashbord extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();      
    }

	public function index()
	{
       
		$this->load->view('User/dashbord');
	}
	
	

	
}
 
 