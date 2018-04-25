<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_user');
		if ($this->session->userdata('status') != "login") {
		redirect('auth'); 
	}
	}

	public function index()
	{
		$data= [];
		$data['list_user'] = $this->m_user->list_user();
		$data['content'] = $this->load->view('app/user', $data, TRUE);
		$this->load->view('app/layout', $data);
	}

	public function get_user($id_user)
	{
		$data= $this->m_user->get_user($id_user);
		echo json_encode($data);
	}

	public function tambah_user()
	{
		$data = array(
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password')),
			'fullname' => $this->input->post('fullname'),
			'level'	   => $this->input->post('level') 
		);
		$insert = $this->m_user->tambah_user($data);
		echo json_encode(array("status" => TRUE));
	}

	public function update_user()
	{
		$data = array(
			'username' => $this->input->post('username'),
			'fullname' => $this->input->post('fullname'),
			'level'	   => $this->input->post('level'), 
		);
		$this->m_user->update_user(array('id_user' => $this->input->post('id_user')), $data);
		echo json_decode(array("status" => TRUE));
	}

	public function delete_user($id_user)
	{
		$this->m_user->delete_user($id_user);
		echo json_encode(array("status" => TRUE));
	}
}
