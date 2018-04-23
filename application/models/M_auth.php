<?php

class M_auth extends CI_model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function login($table, $where)
	{
		return $this->db->get_where($table, $where);
	}
	
}