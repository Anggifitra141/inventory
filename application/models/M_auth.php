<?php

class M_auth extends CI_model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function login($table, $where)
	{
		$query= $this->db->get_where($table, $where);
		$return = $query->num_rows();

		if($query->num_rows() > 0){
      	$return = 1;
      		foreach($query->result() as $r){
        		$udata = [
         		"id"=> $r->id,
          		"username"=> $r->username,
	          	"fullname"=>$r->fullname,
	          	"level"=>$r->level,
	          	"status"=> "login",
	          	"logged_in"=>TRUE
        	];
        		$this->session->set_userdata($udata);
      		}
    	}
   		return $return;

	}

	public function ganti_password($user_id, $password_baru)
	{
		$query = $this->db->query("UPDATE user SET password='$password_baru' WHERE id='$user_id' ");
		return $query;
	}
	
}