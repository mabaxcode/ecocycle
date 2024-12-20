<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct()
	{
        parent::__construct();

       	if ($this->session->userdata('user_id')) {
        	if ($this->session->userdata('user_type') <> '3') {
        		redirect();
        	}
        	
        }

        // $this->load->model('App_model', 'DbApp');
        // $this->users_table  = 'users';
        $this->user_id = $this->session->userdata('user_id');
	}

	public function index()
	{	
		$data['content']      = 'admin/admin-dashboard';
		$data['add_script']   = 'admin/admin-script';
		$data['menu']         = 'admin/admin-menu';

		$data['user'] = get_any_table_row(array('id' => $this->user_id), 'users');

		$this->load->view('master-ui/main', $data);
	}

	function centre_registration($data=false)
	{
		$data['content']      = 'admin/centre_registration';
		$data['add_script']   = 'admin/admin-script';
		$data['menu']         = 'admin/admin-menu';

		//$data['ref_city'] = get_ref_list(array('module' => 'city'), 'ref_code');

		//$data['ref_state'] = get_ref_list(array('module' => 'state'), 'ref_code');

		$data['centres'] = get_any_table_array(array('status' => '0' ), 'centre');

		$data['staffs'] = get_any_table_array(array('user_type' => '2', 'status' => '0' ), 'users');

		$this->load->view('master-ui/main', $data);
	}

	function view_centre_registation($data=false)
	{
		$id = $this->input->post('id');

		$data['centre'] = get_any_table_row(array('id' => $id), 'centre');

		$data['city'] = get_ref_desc($data['centre']['city'], 'city');
		$data['state'] = get_ref_desc($data['centre']['state'], 'state');

		$this->load->view('admin/modal-view-centre-detail', $data);
	}

	function do_approval_centre($data=false)
	{
		$post = $this->input->post();
		// echo "<pre>"; print_r($post); echo "</pre>";

		$update = array('status' => $post['decision']);

		$where = array('id' => $post['id']);

		$update = update_any_table($update, $where, 'centre');

		if ($update == true) {
			// code...
			echo encode(array('status' => true, 'msg' => 'Successfully saved !'));
		} else {
			echo encode(array('status' => false, 'msg' => 'Failed to save !'));
		}

	}

	function setting_inventory($data=false)
	{
		$data['content']      = 'admin/setting_inventory';
		$data['add_script']   = 'admin/admin-script';
		$data['menu']         = 'admin/admin-menu';

		$data['inventory_category'] = get_ref_list(array('module' => 'inventory_category'), 'ref_code');

		// $data['centres'] = get_any_table_array(array('owner_id' => $this->user_id, 'status' => '0' ), 'centre');

		$this->load->view('master-ui/main', $data);
	}

	function setting_blog($data=false)
	{
		$data['content']      = 'admin/setting_blog';
		$data['add_script']   = 'admin/admin-script';
		$data['menu']         = 'admin/admin-menu';

		$data['blog_category'] = get_ref_list(array('module' => 'blog_category'), 'ref_code');

		// $data['centres'] = get_any_table_array(array('owner_id' => $this->user_id, 'status' => '0' ), 'centre');

		$this->load->view('master-ui/main', $data);
	}

	function system_config($data=false)
	{

	}

	function do_add_inventory($data=false)
	{
		$descs = $this->input->post('descs');

		$insert = insert_any_table(array('descs' => $descs, 'module' => 'inventory_category'), 'ref_code');

		if ($insert == true) {
			// code...
			echo encode(array('status' => true, 'msg' => 'Successfully Added !'));
		} else {
			echo encode(array('status' => false, 'msg' => 'Failed to add !'));
		}
	}

	function do_add_blog_cat($data=false)
	{
		$descs = $this->input->post('descs');

		$insert = insert_any_table(array('descs' => $descs, 'module' => 'blog_category'), 'ref_code');

		if ($insert == true) {
			// code...
			echo encode(array('status' => true, 'msg' => 'Successfully Added !'));
		} else {
			echo encode(array('status' => false, 'msg' => 'Failed to add !'));
		}
	}

	function delete_ref_code($data=false)
	{
		$id = $this->input->post('id');

		$delete = delete_any_table(array('id' => $id), 'ref_code');

		if ($delete == true) {
			// code...
			echo encode(array('status' => true, 'msg' => 'Successfully Deleted !'));
		} else {
			echo encode(array('status' => false, 'msg' => 'Failed to delete !'));
		}
	}
}
