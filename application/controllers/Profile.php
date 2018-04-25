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
			$data= [];
			$id_user = $this->session->userdata('id_user');
			$password = md5($this->input->post('password'));
			$password_baru = md5($this->input->post('password_baru'));
			$konfirmasi_password = md5($this->input->post('konfirmasi_password'));
			
			$query = $this->m_auth->cek_password($id_user, $password);
			if ($query) {
				if ($password_baru == $konfirmasi_password) {
					$this->m_auth->ganti_password($id_user, $password_baru);
					$data= [];
					$data['success'] = "Password berhasil di perbaharui";
					$data['content'] = $this->load->view('app/profile', $data, TRUE);
					$this->load->view('app/layout', $data);
				}else{
					$data= [];
					$data['error'] = "Konfirmasi password salah, Silahkan masukan dengan benar";
					$data['content'] = $this->load->view('app/profile', $data, TRUE);
					$this->load->view('app/layout', $data);
				}
			}else{
				$data= [];
				$data['error'] = "Password lama anda salah";
				$data['content'] = $this->load->view('app/profile', $data, TRUE);
				$this->load->view('app/layout', $data);
			}
	}
}
