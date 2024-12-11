<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	public function index()
	{
		$this->load->view('main');
	}

	function register_page($data=false)
	{
		$this->load->view('register_page', $data);
	}
}
