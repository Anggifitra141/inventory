<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penjualan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('status') != "login") {
		redirect('auth'); 
	}
	}

	public function barang_penjualan()
	{
		$data= [];
		$data['content'] = $this->load->view('app/barang_penjualan', $data, TRUE);
		$this->load->view('app/layout', $data);
	}

	public function d_penjualan()
	{
		$data= [];
		$data['content'] = $this->load->view('app/detail_penjualan', $data, TRUE);
		$this->load->view('app/layout', $data);
	}
}
