<?php

class M_supplier extends CI_model
{
	var $table = 'supplier';

	function __construct()
	{
		parent::__construct();
	}

	public function list_supplier()
	{
		$this->db->from('supplier');
		$query= $this->db->get();
		return $query->result();
	}
	
	public function get_supplier($id_supplier)
	{
		$this->db->from($this->table);
		$this->db->where('id_supplier', $id_supplier);
		$query = $this->db->get();
		return  $query->row();
	}

	public function tambah_supplier($data)
	{
		$this->db->insert($this->table, $data);
		return $this->db->insert_id_supplier();
	}

	public function update_Supplier($where, $data)
	{
		$this->db->update($this->table, $data, $where);
		return $this->db->affected_rows();
	}

	public function delete_supplier($id_supplier)
	{
		$this->db->where('id_supplier', $id_supplier);
		$this->db->delete($this->table);
	}
}