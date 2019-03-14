<?php

class Logil_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}

	function validate($user_name, $password)
	{
		$this->db->where('username', $user_name);
		$this->db->where('password', $password);
		$query = $this->db->get('admin');

		if($query->num_rows == 1) {
				return true;
			}		
	}
}


?>