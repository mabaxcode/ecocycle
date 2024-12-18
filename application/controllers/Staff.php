<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff extends CI_Controller {

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
		$data['content']      = 'staff/staff-dashboard';
		$data['add_script']   = 'staff/staff-script';
		$data['menu']         = 'staff/staff-menu';

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

	
}
