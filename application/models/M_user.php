<?php

class M_user extends CI_model
{
	var $table = 'user';

	function __construct()
	{
		parent::__construct();
	}

	public function list_user()
	{
		$this->db->from('user');
		$query= $this->db->get();
		return $query->result();
	}
	
	public function get_user($id)
	{
		$this->db->from($this->table);
		$this->db->where('id', $id);
		$query = $this->db->get();
		return  $query->row();
	}

	public function tambah_user($data)
	{
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}

	public function update_user($where, $data)
	{
		$this->db->update($this->table, $data, $where);
		return $this->db->affected_rows();
	}

	public function delete_user($id)
	{
		$this->db->where('id', $id);
		$this->db->delete($this->table);
	}
}