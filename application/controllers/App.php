<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data=[];
		$data['content'] = $this->load->view('app/dashboard', $data, TRUE);
		$this->load->view('app/layout', $data);
	}
}
