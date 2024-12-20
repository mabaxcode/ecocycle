<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff extends CI_Controller {

	function __construct()
	{
        parent::__construct();

        if ($this->session->userdata('user_id')) {
        	if ($this->session->userdata('user_type') <> '2') {
        		redirect();
        	}
        	
        }

        // $this->load->model('App_model', 'DbApp');
        $this->load->model('Staff_model', 'DbStaff');
        // $this->users_table  = 'users';
        $this->user_id = $this->session->userdata('user_id');
	}

	public function index()
	{	
		$data['content']      = 'staff/staff-dashboard';
		$data['add_script']   = 'staff/staff-script';
		$data['menu']         = 'staff/staff-menu';

		$data['user'] = get_any_table_row(array('id' => $this->user_id), 'users');

		$this->load->view('master-ui/main', $data);
	}

	function add_inventory($data=false)
	{
		$data['content']      = 'staff/add_inventory';
		$data['add_script']   = 'staff/staff-script';
		$data['menu']         = 'staff/staff-menu';

		$data['inventorys'] = get_ref_list(array('module' => 'city'), 'ref_code');

		$data['ref_state'] = get_ref_list(array('module' => 'state'), 'ref_code');

		$data['inventorys'] = get_any_table_array(array('request_by' => $this->user_id ), 'inventory');

		$this->load->view('master-ui/main', $data);
	}

	function add_event($data=false)
	{
		
	}

	function add_blog($data=false)
	{
		
	}

	function event_checkin($data=false)
	{
		$data['content']      = 'staff/event_checkin';
		$data['add_script']   = 'staff/staff-script';
		$data['menu']         = 'staff/staff-menu';

		//$data['ref_city'] = get_ref_list(array('module' => 'city'), 'ref_code');

		//$data['ref_state'] = get_ref_list(array('module' => 'state'), 'ref_code');

		$staff = get_any_table_row(array('staff_id' => $this->user_id), 'staff');

		// echo $this->user_id; exit;

		$data['events'] = get_any_table_array(array('status' => '1', 'centre_id' => $staff['centre_id']), 'event');

		$data['user'] = get_any_table_row(array('id' => $this->user_id), 'users');

		$this->load->view('master-ui/main', $data);
	}

	function modal_checkin($data=false)
	{	

		$id = $this->input->post('id');
		$data['event'] = get_any_table_row(array('id' => $id, 'status' => '1' ), 'event');


		$data['user'] = get_any_table_array(array('event_id' => $id ), 'joined_event');

		$this->load->view('staff/modal-check-in', $data);
	}

	function update_attendence($data=false)
    {
        $id = $this->input->post('id');
        $class_attend = $this->input->post('attend');

        $update = array('complete' => $class_attend);
        $where = array('id' => $id);

        update_any_table($update, $where, 'joined_event');

        $response = array('status' => true );
        echo encode($response);
    }

    function app_list($data=false)
    {
    	$data['content']      = 'staff/registered_app';
		$data['add_script']   = 'staff/staff-script';
		$data['menu']         = 'staff/staff-menu';

		//$data['ref_city'] = get_ref_list(array('module' => 'city'), 'ref_code');

		//$data['ref_state'] = get_ref_list(array('module' => 'state'), 'ref_code');

		$staff = get_any_table_row(array('staff_id' => $this->user_id), 'staff');

		$centre_id = $staff['centre_id'];

		$data['events'] = get_any_table_array(array('centre_id' => $centre_id, 'status' => '1' ), 'event');

		// print_r($data['events']); exit;

		$data['app'] = get_any_table_array(array('centre_id' => $centre_id ), 'joined_event');

		$this->load->view('master-ui/main', $data);
    }

    function record_app($data=false)
	{	
		$requestData    = $this->input->post();

		// echo "<pre>"; print_r($requestData); echo "</pre>"; exit;

		$staff = get_any_table_row(array('staff_id' => $this->user_id), 'staff');

		$centre_id = $staff['centre_id'];



		$output 		= $this->DbStaff->dt_search_staff($requestData, $centre_id);
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

			//$centre_name = get_any_table_row(array('id' => $key['centre_id']), 'centre');

			$staff_id = $key['user_id'];

			// $action = "<a href='#' class='btn btn-light btn-primary btn-flex btn-center btn-sm detail-staff' data-formid=\"$key['staff_id']\">Details</a>";

			$action = "<button class=\"btn btn-light btn-primary btn-flex btn-center btn-sm detail-app\" data-init=\"$staff_id\">Details</button>";

			$event = get_any_table_row(array('id' => $key['event_id'], 'status' => '1' ), 'event');

			if ($key['complete'] == 'N') {
				// code...
				$status = '<span class="badge badge-success fw-bold badge-lg">On Going</span>';
			} else {
				$status = '<span class="badge badge-info fw-bold badge-lg">Joined, Check-In</span>';
			}

			#Final Data
				$aaData[] = array(
					'no'		=>	$no++, 
					'name'		=>	$key['name'], 
					'email'		=>	$key['email'],
					'event'		=>	$event['name'], 
					'status'	=>	$status,
					'action'	=>	$action, 
				);
				

			}

		$sOutput = array
		(
			'draw'                => $this->input->post('draw'),
			'recordsTotal'        => $this->DbStaff->count_all_staff($requestData, $centre_id),
			'recordsFiltered'     => $this->DbStaff->count_filtered_staff($requestData, $centre_id),
			'data'                => $aaData
		);

		echo json_encode($sOutput);
	}

	function gen_cert($data=false)
	{
		$data['content']      = 'staff/gen_cert';
		$data['add_script']   = 'staff/staff-script';
		$data['menu']         = 'staff/staff-menu';

		//$data['ref_city'] = get_ref_list(array('module' => 'city'), 'ref_code');

		//$data['ref_state'] = get_ref_list(array('module' => 'state'), 'ref_code');

		$staff = get_any_table_row(array('staff_id' => $this->user_id), 'staff');

		// echo $this->user_id; exit;

		$data['events'] = get_any_table_array(array('status' => '1', 'centre_id' => $staff['centre_id']), 'event');

		$data['user'] = get_any_table_row(array('id' => $this->user_id), 'users');

		$this->load->view('master-ui/main', $data);
	}

	function complete_this_event($data=false)
	{
		$id = $this->input->post('id');

		$insert = update_any_table(array('complete' => '1'), array('id' => $id), 'event');

		if ($insert == true) {
			echo encode(array('status' => true, 'msg' => 'Success ! Event completed, now you can proceed to generate certificate for this participant in this event. Thank You !'));
		} else {
			echo encode(array('status' => false, 'msg' => 'Failed to compplete !'));
		}

	}

	function generate_certification($id)
	{
		

		// $this->load->view('staff/generating_certification', $data);

		$data['content']      = 'staff/generating_certification';
		$data['add_script']   = 'staff/staff-script';
		$data['menu']         = 'staff/staff-menu';

		//$data['ref_city'] = get_ref_list(array('module' => 'city'), 'ref_code');

		//$data['ref_state'] = get_ref_list(array('module' => 'state'), 'ref_code');

		$staff = get_any_table_row(array('staff_id' => $this->user_id), 'staff');

		$where = array('event_id' => $id);
		$data['total'] = count_any_table($where, 'joined_event');



		$data['event'] = get_any_table_row(array('id' => $id), 'event');

		$data['user'] = get_any_table_row(array('id' => $this->user_id), 'users');

		$data['apps'] = get_any_table_array(array('event_id' => $id ), 'joined_event');

		$this->load->view('master-ui/main', $data);
	}

	function do_generate_cert($data=false)
	{
		$id = $this->input->post('id');

		$participant = get_any_table_array(array('event_id' => $id, 'complete' => 'Y' ), 'joined_event');

		foreach ($participant as $key) {

			update_any_table(array('cert' => '1'), array('id' => $key['id']), 'joined_event');

		}

		echo encode(array('status' => true, 'msg' => 'Success ! Certificate has been successfully generated !'));
	}

	
}
