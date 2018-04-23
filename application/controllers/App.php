<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_supplier');
		if ($this->session->userdata('status') != "login") {
		redirect('auth'); 
	}
	}

	public function index()
	{
		$data= array();
		$data['content'] = $this->load->view('app/dashboard', $data, TRUE);
		$data['active'] = "active";
		$this->load->view('app/layout', $data);
	}

	public function supplier()
	{
		$data = [];
		$data['list_supplier'] = $this->m_supplier->list_supplier();
		$data['content'] = $this->load->view('app/supplier', $data, TRUE);
		$this->load->view('app/layout', $data);
	}


	public function tambah_supplier()
	{
		$data = array(
			'nama' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
			'ket' => $this->input->post('ket')
		);
		$insert = $this->m_supplier->tambah_supplier($data);
		echo json_encode(array("status" => TRUE));
	}

	public function get_supplier($id)
	{
		$data = $this->m_supplier->get_supplier($id);
		echo json_encode($data);
	}

	public function update_supplier()
	{
		$data = array(
			'nama' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
			'ket' => $this->input->post('ket') 
		);
		$this->m_supplier->update_supplier(array('id' => $this->input->post('id')), $data);
		echo json_encode(array("status" => TRUE));
	}

	public function delete_supplier($id)
	{
		$this->m_supplier->delete_supplier($id);
		echo json_encode(array("status" => TRUE));
	}
}
