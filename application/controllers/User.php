<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

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

        // $this->load->model('App_model', 'DbApp');
        // $this->users_table  = 'users';
        $this->user_id = $this->session->userdata('user_id');
	}

	public function index()
	{	
		$data['content']      = 'user/user-dashboard';
		$data['add_script']   = 'user/user-script';
		$data['menu']         = 'user/user-menu';

		$data['user'] = get_any_table_row(array('id' => $this->user_id), 'users');

		$data['participant'] = get_any_table_row(array('user_id' => $this->user_id), 'participant');

		$this->load->view('master-ui/main', $data);
	}

	function participant_details($data=false)
	{
		$data['content']      = 'user/participant_details';
		$data['add_script']   = 'user/user-script';
		$data['menu']         = 'user/user-menu';

		$data['user'] = get_any_table_row(array('id' => $this->user_id), 'users');

		$data['participant'] = get_any_table_row(array('user_id' => $this->user_id), 'participant');

		$this->load->view('master-ui/main', $data);
	}

	function update_profile($data=false)
	{
		$post = $this->input->post();

		// echo "<pre>"; print_r($post); echo "</pre>";

		$users = array('name' => $post['name'], 'email' => $post['email'], 'participant_status' => '1');

		$update_user = update_any_table($users, array('id' => $post['id']), 'users');

		$participant = array('phone_no' => $post['phone_no'], 'address' => $post['address'], 'eme_phone_no' => $post['eme_phone_no'], 'eme_name' => $post['eme_name']);

		$participant_insert = array('phone_no' => $post['phone_no'], 'address' => $post['address'], 'eme_phone_no' => $post['eme_phone_no'], 'eme_name' => $post['eme_name'], 'user_id' => $post['id']);

		$get_par = get_any_table_row(array('user_id' => $post['id']), 'participant');

		if ($get_par == true) {
			$update_par = update_any_table($participant, array('user_id' => $post['id']), 'participant');
		} else {
			$insert_par = insert_any_table($participant_insert, 'participant');
		}

		

		echo encode(array('status' => true, 'msg' => 'Congratulation ! Your details has been successfully saved.'));
		
	}

	function events($data=false)
	{
		$data['content']      = 'user/events';
		$data['add_script']   = 'user/user-script';
		$data['menu']         = 'user/user-menu';

		//$data['ref_city'] = get_ref_list(array('module' => 'city'), 'ref_code');

		//$data['ref_state'] = get_ref_list(array('module' => 'state'), 'ref_code');

		$data['events'] = get_any_table_array(array('status' => '1' ), 'event');

		$data['user'] = get_any_table_row(array('id' => $this->user_id), 'users');

		$this->load->view('master-ui/main', $data);
	}

	function blog($data=false)
	{
		$data['content']      = 'user/blog';
		$data['add_script']   = 'user/user-script';
		$data['menu']         = 'user/user-menu';

		//$data['ref_city'] = get_ref_list(array('module' => 'city'), 'ref_code');

		//$data['ref_state'] = get_ref_list(array('module' => 'state'), 'ref_code');

		$data['blogs'] = get_any_table_array(array('status' => '3'), 'blog');

		$data['user'] = get_any_table_row(array('id' => $this->user_id), 'users');

		$this->load->view('master-ui/main', $data);
	}

	function blog_details($id)
	{
		$data['content']      = 'user/blog_details';
		$data['add_script']   = 'user/user-script';
		$data['menu']         = 'user/user-menu';

		//$data['ref_city'] = get_ref_list(array('module' => 'city'), 'ref_code');

		//$data['ref_state'] = get_ref_list(array('module' => 'state'), 'ref_code');

		$data['blog'] = get_any_table_row(array('id' => $id), 'blog');

		$data['user'] = get_any_table_row(array('id' => $this->user_id), 'users');

		$this->load->view('master-ui/main', $data);
	}

	function pre_booked_event($data=false)
	{
		$id = $this->input->post('id');

		$data['event'] = get_any_table_row(array('id' => $id), 'event');
		// $data['staff'] = get_any_table_row(array('staff_id' => $id), 'staff');

		// $data['city'] = get_ref_desc($data['centre']['city'], 'city');
		// $data['state'] = get_ref_desc($data['centre']['state'], 'state');

		$this->load->view('user/modal-booked-event', $data);	
	}

	
}
