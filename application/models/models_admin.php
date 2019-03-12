<?php

/**
 * 
 */
class Models_admin extends CI_Model
{
	
	function getData(){
		return $this->db->get('admin');
	}
}


?>