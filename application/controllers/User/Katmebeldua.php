<?php 
defined('BASEPATH') or exit('No direct script access allowed');


 // controller di awali dengan huruf kapital
class Katmebeldua extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
        
        
        // user sebagai nama folder nya
        // contact itu untuk mamanggil method untuk urutan tampilan website / sbg Overview nya
		$this->load->view('User/katmebeldua') ;
	}
}
 