<?php

class Login_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}

	function validate($email, $password)
	{
		$this->db->where('email', $email);
		$this->db->where('password', $password);
		$query = $this->db->get('admin');

		if ($query->num_rows == 1) {
			return true;
		}
	}
}
 