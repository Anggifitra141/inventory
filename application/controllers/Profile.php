<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_auth');
		if ($this->session->userdata('status') != "login") {
		redirect('auth'); 
		}
	}

	public function index()
	{
		$data= [];
		$data['content'] = $this->load->view('app/profile', $data, TRUE);
		$this->load->view('app/layout', $data);
	}

	public function ganti_password()
	{	
		$user_id = $this->session->userdata('id');
		$password = md5($this->input->post('password'));
		$password_baru = md5($this->input->post('password_baru'));
		$retype_password = md5($this->input->post('retype_password'));
		if ($password_baru == $retype_password) {
			$this->m_auth->ganti_password($user_id, $password_baru);
			redirect('auth/logout');
		}else{
			echo "gagal";
		}
	}
}
