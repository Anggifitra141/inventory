<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembelian extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('status') != "login") {
		redirect('auth'); 
	}
	}

	public function barang_pembelian()
	{
		$data= [];
		$data['content'] = $this->load->view('app/barang_pembelian', $data, TRUE);
		$this->load->view('app/layout', $data);
	}

	public function d_pembelian()
	{
		$data= [];
		$data['content'] = $this->load->view('app/detail_pembelian', $data, TRUE);
		$this->load->view('app/layout', $data);
	}
}
