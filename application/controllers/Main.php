<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	function __construct()
	{
        parent::__construct();

        // if ($this->session->userdata('user_id')) {
        // 	if ($this->session->userdata('user_type') == '1') {
        // 		redirect('app');
        // 	} else {
        // 		redirect('office');
        // 	}

        // }

        $this->load->model('Main_model', 'main');
        $this->users_table  = 'users';
	}


	public function index()
	{
		$this->load->view('main');
	}

	function login_page($data=false)
	{
		$this->load->view('login_page', $data);
	}

	function do_create_account($data=false)
	{
		$data = $this->input->post();
		// print_r($data); exit();

		$emailExist = $this->main->check_email(array('email' => $data['email']));

		if ($emailExist['status'] == true) {
			$this->session->set_flashdata('error', 'Sorry, the email address is already exist.');
			redirect(base_url('#contact'));
		} else {

			# do register account
			$data_insert = array(
				'name' 	 	 => $data['name'],
				'email'  	 => $data['email'],
				'username'   => $data['username'],
				'password' 	 => md5($data['password']),
				'create_dt'  => current_date(),
				'user_type'  => '1',
				'status' 	 => '1',
			);

			$insert = $this->main->insert_users_table($this->users_table, $data_insert);
			
			$this->session->set_flashdata('success', 'Account has been successfully created !');
			redirect(base_url('#contact'));

		}

		echo encode($response);
		exit();
	}

	function login_process($data=false)
	{
		$data = $this->input->post();
		// print_r($data); exit();
		$user_login = $this->main->check_user_login($data);

		if ($user_login == false) {

			$this->session->set_flashdata('info', 'Sorry, the username or password is incorrect, please try again.');
			redirect('main/login_page');
			exit;

		} else {

			// if ($user_login['active'] <> '1') {
			// 	$this->session->set_flashdata('info', 'Your account is currently inactive. Please contact Admin for further assistance.');
			// 	redirect();
			// 	exit;
			// }

			$sess_data = array(
				'user_id' 	=> $user_login['id'],
				'name' 	  	=> $user_login['name'],
				'email' 	=> $user_login['email'],
				'username' 	=> $user_login['username'],
				'user_type' => $user_login['user_type'],
			);

			$this->session->set_userdata($sess_data);

			if ($user_login['user_type'] == '1') {
				redirect('manager');
			} elseif ($user_login['user_type'] == '2') {
				redirect('staff');
			} else {
				redirect('admin');
			}
			
			
		}

	}
	
}
