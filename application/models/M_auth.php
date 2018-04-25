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
         		"id_user"=> $r->id_user,
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

	public function cek_password($id_user, $password)
	{
		$this->db->from('user');
		$this->db->where('id_user', $id_user);
		$this->db->where('password', $password);
		$query = $this->db->get();
		if ($query->num_rows()) {
			return TRUE;
		}else{
			return FALSE;
		}
	}
	public function ganti_password($id_user, $password_baru)
	{
		$this->db->update("user", ["password"=>$password_baru], ["id_user"=>$id_user]);
		return TRUE;
	}
}