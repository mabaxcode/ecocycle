<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manager extends CI_Controller {

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

        $this->load->model('Manager_model', 'DbManager');
        // $this->users_table  = 'users';
        $this->user_id = $this->session->userdata('user_id');
	}

	public function index()
	{	
		$data['content']      = 'manager/manager-dashboard';
		$data['add_script']   = 'manager/manager-script';
		$data['menu']         = 'manager/manager-menu';

		$this->load->view('master-ui/main', $data);
	}

	function centre_registration($data=false)
	{
		$data['content']      = 'manager/centre_registration';
		$data['add_script']   = 'manager/manager-script';
		$data['menu']         = 'manager/manager-menu';

		$data['ref_city'] = get_ref_list(array('module' => 'city'), 'ref_code');

		$data['ref_state'] = get_ref_list(array('module' => 'state'), 'ref_code');

		$data['centres'] = get_any_table_array(array('owner_id' => $this->user_id, 'status' => '0' ), 'centre');

		$this->load->view('master-ui/main', $data);
	}

	function registered_centre($data=false)
	{
		$data['content']      = 'manager/registered_centre';
		$data['add_script']   = 'manager/manager-script';
		$data['menu']         = 'manager/manager-menu';

		$data['centres'] = get_any_table_array(array('owner_id' => $this->user_id, 'status !=' => '0' ), 'centre');

		$this->load->view('master-ui/main', $data);	
	}

	function do_centre_registration($data=false)
	{
		$post = $this->input->post();

		// echo "<pre>"; print_r($post); echo "</pre>";

		$insert_data = array(
			'name' => strtoupper($post['name']), 
			'address1' => $post['address1'], 
			'address2' => $post['address2'], 
			'address3' => $post['address3'], 
			'city' => $post['city'], 
			'state' => $post['state'], 
			'phone_no' => $post['phone_no'], 
			'create_dt' => current_date(),
			'owner_id' => $this->user_id,
			'email' => $post['email'],
		);

		$insert = insert_any_table($insert_data, 'centre');

		if ($insert == true) {
			echo encode(array('status' => true, 'msg' => 'Your recycling centre has been successfully submit for verification process !'));
		} else {
			echo encode(array('status' => false, 'msg' => 'Failed to create !'));
		}
	}

	function view_centre_registation($data=false)
	{
		$id = $this->input->post('id');

		$data['centre'] = get_any_table_row(array('id' => $id), 'centre');

		$data['city'] = get_ref_desc($data['centre']['city'], 'city');
		$data['state'] = get_ref_desc($data['centre']['state'], 'state');

		$this->load->view('manager/modal-view-centre-detail', $data);
	}

	function view_staff_details($data=false)
	{
		$id = $this->input->post('id');

		$data['users'] = get_any_table_row(array('id' => $id), 'users');
		$data['staff'] = get_any_table_row(array('staff_id' => $id), 'staff');

		// $data['city'] = get_ref_desc($data['centre']['city'], 'city');
		// $data['state'] = get_ref_desc($data['centre']['state'], 'state');

		$this->load->view('manager/modal-view-staff-detail', $data);
	}

	function process_event($data=false)
	{
		$id = $this->input->post('id');

		$data['event'] = get_any_table_row(array('id' => $id), 'event');
		// $data['staff'] = get_any_table_row(array('staff_id' => $id), 'staff');

		// $data['city'] = get_ref_desc($data['centre']['city'], 'city');
		// $data['state'] = get_ref_desc($data['centre']['state'], 'state');

		$data['centre'] = get_any_table_row(array('id' => $data['event']['centre_id']), 'centre');

		$data['users'] = get_any_table_row(array('id' => $data['event']['request_by']), 'users');

		$this->load->view('manager/modal-process-event', $data);
	}

	function process_inventory($data=false)
	{
		$id = $this->input->post('id');

		$data['inventory'] = get_any_table_row(array('id' => $id), 'inventory');
		// $data['staff'] = get_any_table_row(array('staff_id' => $id), 'staff');

		// $data['city'] = get_ref_desc($data['centre']['city'], 'city');
		// $data['state'] = get_ref_desc($data['centre']['state'], 'state');

		$data['centre'] = get_any_table_row(array('id' => $data['inventory']['centre_id']), 'centre');

		$data['users'] = get_any_table_row(array('id' => $data['inventory']['request_by']), 'users');

		$this->load->view('manager/modal-process-inventory', $data);
	}

	function complete_staff_register($data=false)
	{
		$data['staff_id'] = $this->input->post('id');

		$data['approved_centre'] = get_any_table_array(array('owner_id' => $this->user_id, 'status !=' => '0' ), 'centre');

		$this->load->view('manager/modal-complete-register', $data);
	}

	function staff_management($data=false)
	{
		$data['content']      = 'manager/staff_management';
		$data['add_script']   = 'manager/manager-script';
		$data['menu']         = 'manager/manager-menu';

		//$data['ref_city'] = get_ref_list(array('module' => 'city'), 'ref_code');

		//$data['ref_state'] = get_ref_list(array('module' => 'state'), 'ref_code');

		$data['approved_centre'] = get_any_table_array(array('owner_id' => $this->user_id, 'status !=' => '0' ), 'centre');

		$data['staffs'] = get_any_table_array(array('user_type' => '2', 'status' => '0' ), 'users');

		$this->load->view('master-ui/main', $data);
	}

	function registered_staff($data=false)
	{
		$data['content']      = 'manager/registered_staff';
		$data['add_script']   = 'manager/manager-script';
		$data['menu']         = 'manager/manager-menu';

		//$data['ref_city'] = get_ref_list(array('module' => 'city'), 'ref_code');

		//$data['ref_state'] = get_ref_list(array('module' => 'state'), 'ref_code');

		$data['approved_centre'] = get_any_table_array(array('owner_id' => $this->user_id, 'status !=' => '0' ), 'centre');

		$data['staffs'] = get_any_table_array(array('manager_id' => $this->user_id, 'status' => '1' ), 'staff');

		$this->load->view('master-ui/main', $data);
	}

	function record_staff($data=false)
	{	
		$requestData    = $this->input->post();

		// echo "<pre>"; print_r($requestData); echo "</pre>"; exit;


		$output 		= $this->DbManager->dt_search_staff($requestData, $this->user_id);
		$aaData 	  	= array();

		// echo "<pre>"; print_r($output); echo "</pre>"; exit;
		
		$no = 1;
		foreach($output as $key)
		{
			//$form_id = ec($key['form_id']);

			//$img_path 		= base_url('office/ep/view_photo/'.$form_id);
			//photo    		= "<img class=\"img-fluid img-thumbnail\" width=\"60\" src=\"$img_path\">";
			//$company_name 	= get_table_code("company", "account_id", "name", $key['account_id']);

			// $action = "<button class=\"btn btn-primary btn-sm cancel-app\">CANCEL</button>";
			//$action = "<button class=\"btn btn-primary btn-sm cancel-app\" data-formid=\"$form_id\">CANCEL</button>";

			// $gredDesc = get_ref_code('gred', $key['gred']);

			$centre_name = get_any_table_row(array('id' => $key['centre_id']), 'centre');

			$staff_id = $key['staff_id'];

			// $action = "<a href='#' class='btn btn-light btn-primary btn-flex btn-center btn-sm detail-staff' data-formid=\"$key['staff_id']\">Details</a>";

			$action = "<button class=\"btn btn-light btn-primary btn-flex btn-center btn-sm detail-staff\" data-init=\"$staff_id\">Details</button>";

			#Final Data
				$aaData[] = array(
					'no'		=>	$no++, 
					'name'		=>	$key['name'], 
					'email'		=>	$key['email'],
					'phone_no'	=>	$key['phone_no'], 
					'status'	=>	'<span class="badge badge-info fw-bold badge-lg">' . $centre_name['name'] . "</span>",
					'action'	=>	$action, 
				);
				

			}

		$sOutput = array
		(
			'draw'                => $this->input->post('draw'),
			'recordsTotal'        => $this->DbManager->count_all_staff($requestData, $this->user_id),
			'recordsFiltered'     => $this->DbManager->count_filtered_staff($requestData, $this->user_id),
			'data'                => $aaData
		);

		echo json_encode($sOutput);
	}

	function do_register_staff($data=false)
	{
		$post = $this->input->post();

		// echo "<pre>"; print_r($post); echo "</pre>";

		$insert_data = array(
			'create_dt' => current_date(),
			'manager_id' => $this->user_id,
			'centre_id' => $post['centre'],
			'status' => '1',
			'staff_id' => $post['staff_id'],
			'position' => $post['position'],
			'phone_no' => $post['phone_no'],
		);

		$insert = insert_any_table($insert_data, 'staff');

		if ($insert == true) {

			$update = array('status' => '1');

			update_any_table($update, array('id' => $post['staff_id'], 'user_type' => '2'), 'users');

			echo encode(array('status' => true, 'msg' => 'Staff registration has been completed !'));
		} else {
			echo encode(array('status' => false, 'msg' => 'Failed to create !'));
		}
	}

	function do_create_staff_acc($data=false)
	{
		$post = $this->input->post();

		// echo "<pre>"; print_r($post); echo "</pre>";

		$insert_data = array(
			'name' => $post['name'], 
			'email' => $post['email'],
			'username' => $post['username'], 
			'password' => md5($post['password']), 
			'user_type' => '2', 
			'create_dt' => current_date(),
			
		);

		$insert = insert_any_table($insert_data, 'users');

		if ($insert == true) {
			echo encode(array('status' => true, 'msg' => 'New staff account has been created, please complete the staff registration !'));
		} else {
			echo encode(array('status' => false, 'msg' => 'Failed to create !'));
		}
	}

	function event_submit($data=false)
	{
		$data['content']      = 'manager/event_submit';
		$data['add_script']   = 'manager/manager-script';
		$data['menu']         = 'manager/manager-menu';

		//$data['ref_city'] = get_ref_list(array('module' => 'city'), 'ref_code');

		//$data['ref_state'] = get_ref_list(array('module' => 'state'), 'ref_code');

		$data['events'] = get_any_table_array(array('manager_id' => $this->user_id, 'status' => '0' ), 'event');

		$this->load->view('master-ui/main', $data);
	}

	function inventory_submit($data=false)
	{
		$data['content']      = 'manager/inventory_submit';
		$data['add_script']   = 'manager/manager-script';
		$data['menu']         = 'manager/manager-menu';

		//$data['ref_city'] = get_ref_list(array('module' => 'city'), 'ref_code');

		//$data['ref_state'] = get_ref_list(array('module' => 'state'), 'ref_code');

		$data['inventorys'] = get_any_table_array(array('manager_id' => $this->user_id, 'status' => '0' ), 'inventory');

		$this->load->view('master-ui/main', $data);
	}

	function do_approval_event($data=false)
	{
		$post = $this->input->post();
		// echo "<pre>"; print_r($post); echo "</pre>";

		$update = array('status' => $post['decision']);

		$where = array('id' => $post['id']);

		$update = update_any_table($update, $where, 'event');

		if ($update == true) {
			// code...
			echo encode(array('status' => true, 'msg' => 'Successfully saved !'));
		} else {
			echo encode(array('status' => false, 'msg' => 'Failed to save !'));
		}

	}

	function do_approval_inventory($data=false)
	{
		$post = $this->input->post();
		// echo "<pre>"; print_r($post); echo "</pre>";

		$update = array('status' => $post['decision']);

		$where = array('id' => $post['id']);

		$update = update_any_table($update, $where, 'inventory');

		if ($update == true) {
			// code...
			echo encode(array('status' => true, 'msg' => 'Successfully saved !'));
		} else {
			echo encode(array('status' => false, 'msg' => 'Failed to save !'));
		}

	}

	function blog_post($data=false)
	{
		$data['content']      = 'manager/blog_post';
		$data['add_script']   = 'manager/manager-script';
		$data['menu']         = 'manager/manager-menu';

		//$data['ref_city'] = get_ref_list(array('module' => 'city'), 'ref_code');

		//$data['ref_state'] = get_ref_list(array('module' => 'state'), 'ref_code');

		$data['blogs'] = get_any_table_array(array('manager_id' => $this->user_id), 'blog');

		$this->load->view('master-ui/main', $data);
	}

	function process_blog($id)
	{
		$data['content']      = 'manager/process_blog_post';
		$data['add_script']   = 'manager/manager-script';
		$data['menu']         = 'manager/manager-menu';

		//$data['ref_city'] = get_ref_list(array('module' => 'city'), 'ref_code');

		//$data['ref_state'] = get_ref_list(array('module' => 'state'), 'ref_code');

		$data['blog'] = get_any_table_row(array('id' => $id), 'blog');

		$data['users'] = get_any_table_row(array('id' => $data['blog']['create_by']), 'users');

		$this->load->view('master-ui/main', $data);
	}

	function reject_blog($data=false)
	{
		$id = $this->input->post('id');

		$update = update_any_table(array('status' => '2'), array('id' => $id) ,'blog');

		if ($update == true) {
			// code...
			echo encode(array('status' => true, 'msg' => 'Blog post has been successfully rejected !'));
		} else {
			echo encode(array('status' => false, 'msg' => 'Failed !'));
		}
	}

	function approve_blog($data=false)
	{
		$id = $this->input->post('id');

		$update = update_any_table(array('status' => '1'), array('id' => $id) ,'blog');

		if ($update == true) {
			// code...
			echo encode(array('status' => true, 'msg' => 'Blog post has been successfully approved and published !'));
		} else {
			echo encode(array('status' => false, 'msg' => 'Failed !'));
		}
	}

	function centre_report($data=false)
	{
		$data['content']      = 'manager/centre_report';
		$data['add_script']   = 'manager/manager-script';
		$data['menu']         = 'manager/manager-menu';

		//$data['ref_city'] = get_ref_list(array('module' => 'city'), 'ref_code');

		//$data['ref_state'] = get_ref_list(array('module' => 'state'), 'ref_code');

		$data['centres'] = get_any_table_array(array('owner_id' => $this->user_id), 'centre');

		$this->load->view('master-ui/main', $data);
	}

	function report_details($id)
	{
		$data['content']      = 'manager/report_details';
		$data['add_script']   = 'manager/manager-script';
		$data['menu']         = 'manager/manager-menu';

		$data['centre'] = get_any_table_row(array('id' => $id), 'centre');

		$data['city'] = get_ref_desc($data['centre']['city'], 'city');
		$data['state'] = get_ref_desc($data['centre']['state'], 'state');

		$data['staffs'] = get_any_table_array(array('centre_id' => $id, 'status' => '1'), 'staff');

		$data['events'] = get_any_table_array(array('centre_id' => $id), 'event');

		$data['inventorys'] = get_any_table_array(array('centre_id' => $id), 'inventory');

		$this->load->view('master-ui/main', $data);	
	}

	function view_event($data=false)
	{
		$id = $this->input->post('id');

		$data['event'] = get_any_table_row(array('id' => $id), 'event');
		// $data['staff'] = get_any_table_row(array('staff_id' => $id), 'staff');

		// $data['city'] = get_ref_desc($data['centre']['city'], 'city');
		// $data['state'] = get_ref_desc($data['centre']['state'], 'state');

		$data['centre'] = get_any_table_row(array('id' => $data['event']['centre_id']), 'centre');

		$data['users'] = get_any_table_row(array('id' => $data['event']['request_by']), 'users');



		$this->load->view('manager/modal-view-event', $data);
	}
}
