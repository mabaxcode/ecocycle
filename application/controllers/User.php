<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct()
	{
        parent::__construct();

        if ($this->session->userdata('user_id')) {
        	if ($this->session->userdata('user_type') <> '4') {
        		redirect();
        	}
        	
        }

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


		$data['total_coming'] = count_any_table(array('status' => '1', 'complete' =>'0' ), 'event');

		$data['total_invl'] = count_any_table(array('user_id' => $this->user_id ), 'joined_event');

		$this->load->view('master-ui/main', $data);
	}

	function participant_details($data=false)
	{
		$data['content']      = 'user/participant_details';
		$data['add_script']   = 'user/participant-script';
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

		$data['events'] = get_any_table_array(array('status' => '1', 'complete' =>'0' ), 'event');

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

	function do_booked_event($data=false)
	{	
		$event_id = $this->input->post('id');

		$event_data = get_any_table_row(array('id' => $event_id), 'event');

		$joined_event = array('user_id' => $this->user_id, 'event_id' => $event_id, 'complete' => 'N', 'create_dt' => current_date(), 'centre_id' => $event_data['centre_id'] );

		insert_any_table($joined_event, 'joined_event');

		

		$current_balance = $event_data['balance_slot']; 

		$new_balance = $current_balance - 1;
		
		update_any_table(array('balance_slot' => $new_balance), array('id' => $event_id), 'event');

		echo encode(array('status' => true, 'msg' => 'Successfully joined !'));

	}

	function joined_event($data=false)
	{
		$data['content']      = 'user/joined_event';
		$data['add_script']   = 'user/user-script';
		$data['menu']         = 'user/user-menu';

		//$data['ref_city'] = get_ref_list(array('module' => 'city'), 'ref_code');

		//$data['ref_state'] = get_ref_list(array('module' => 'state'), 'ref_code');

		$data['events'] = get_any_table_array(array('user_id' => $this->user_id ), 'joined_event');

		$data['user'] = get_any_table_row(array('id' => $this->user_id), 'users');

		$this->load->view('master-ui/main', $data);
	}

	function feedback_modal($data=false)
	{
		$id = $this->input->post('id');

		//$data['event'] = get_any_table_row(array('id' => $id), 'event');
		// $data['staff'] = get_any_table_row(array('staff_id' => $id), 'staff');

		// $data['city'] = get_ref_desc($data['centre']['city'], 'city');
		// $data['state'] = get_ref_desc($data['centre']['state'], 'state');

		$data['id'] = $id;

		$this->load->view('user/modal-feedback', $data);	
	}

	function save_the_feedback($data=false)
	{
		$id = $this->input->post('id');

		$joined_event = get_any_table_row(array('id' => $id), 'joined_event');

		$feedback = $this->input->post('feedback');

		$update_joined = array('feedback' => '1' );

		update_any_table($update_joined, array('id' => $id), 'joined_event');

		$insert_feed = array('event_id' => $joined_event['event_id'], 'user_id' => $joined_event['user_id'], 'feedback' => $feedback, 'create_dt' => current_date());

		insert_any_table($insert_feed, 'feedback');

		echo encode(array('status' => true, 'msg' => 'Congratulation ! Are you successfully participated, you can now download certificate.'));

	}

	function feedback($data=false)
	{
		$data['content']      = 'user/feedback';
		$data['add_script']   = 'user/user-script';
		$data['menu']         = 'user/user-menu';

		//$data['ref_city'] = get_ref_list(array('module' => 'city'), 'ref_code');

		//$data['ref_state'] = get_ref_list(array('module' => 'state'), 'ref_code');

		$data['feedbacks'] = get_any_table_array(array('status' => '0'), 'feedback');

		// $data['user'] = get_any_table_row(array('id' => $this->user_id), 'users');

		$this->load->view('master-ui/main', $data);
	}

	
}
