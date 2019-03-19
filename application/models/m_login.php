<?php

/**
 * 
 */
class M_login extends CI_Model
{

	function getData()
	{
		return $this->db->get('admin');
	}
}
 