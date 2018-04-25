<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('status') != "login") {
		redirect('auth'); 
	}
	}

	public function index()
	{
		$data= [];
		$data['content'] = $this->load->view('app/barang', $data, TRUE);
		$this->load->view('app/layout', $data);
	}

}
