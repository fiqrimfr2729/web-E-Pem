<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class m_data_model extends CI_Model{
 
	function tampil_data(){
		return $this->db->get('tentang');
	}
}
    
