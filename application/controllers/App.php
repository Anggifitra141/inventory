<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
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

}
