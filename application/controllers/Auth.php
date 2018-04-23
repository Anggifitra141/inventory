<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_auth');
		$this->load->library('session');
	}

	public function index()
	{
		$this->load->view('login/login');
	}

	public function login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username , 
			'password' => md5($password)
			);
		$cek = $this->m_auth->login("user", $where)->num_rows();
		if ($cek > 0) {
					$data_session = array(
						'username' 	=> $username ,
						'level'    	=> $level,
						'status' 	=> 'login' 
					);
					
			$this->session->set_userdata($data_session);
			redirect ('app');		
		}else{
			$data = array();
			$data['error'] = "Maaf username atau password yang anda masukan salah";
			$this->load->view('login/login', $data);
		}
	}
		
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('auth', 'refresh');
	}
}
