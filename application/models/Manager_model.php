<?php
class Manager_model extends CI_Model {

    function __construct()
    {
        parent::__construct();

        $this->users_table  = 'users';
    }

    function check_email($where)
	{
		$this->db->select('*');
        $this->db->where($where);
        $query = $this->db->get($this->users_table);

        // return $this->db->last_query();

        if($query->num_rows() > 0){
        	$response = array('status' => true); 
        } else {
        	$response = array('status' => false);
        }

        return $response;

	}

    function insert_users_table($table, $data)
    {   
        $this->db->insert($table, $data);
        return $this->db->affected_rows();
    }

    function check_user_login($data)
    {
        $this->db->select('*');
        $this->db->where(array(
            'username'   => $data['username'], 
            'password'   => md5($data['password']),
        ));
        $query = $this->db->get($this->db_user);

        if($query->num_rows() > 0){ return $query->row_array(); } else { return false; }
    }

    public function dt_search_staff($requestData, $manager_id)
    {
        $this->_dt_search_staff_query($requestData, $manager_id);

        if ($requestData['length'] != -1)
            $this->db->limit($requestData['length'], $requestData['start']);

        $query = $this->db->get();
        // print_r($this->db->last_query());
        // exit;
        return $query->result_array();
    }

    private function _dt_search_staff_query($requestData, $manager_id)
    {
        $this->db->select('*');
        $this->db->from('staff');
        $this->db->join('users', 'staff.staff_id = users.id');
        $this->db->where('users.status', '1');
        $this->db->where('staff.manager_id', $manager_id);
        // $this->db->where_in('role',['2','3']);
        //$this->db->where('user_accounts.job_status', 'A');
        // $this->db->order_by('user_accounts.create_dt', 'DESC');

        # search
        // if (!empty($requestData['inpt_data']) && isset($requestData['inpt_data'])) {
        //     $this->db->group_start();
        //     $this->db->like('name', $requestData['inpt_data']);
        //     $this->db->or_like('no_kp', $requestData['inpt_data']);
        //     $this->db->group_end();
        // }
        if (!empty($requestData['inpt_centre']) && isset($requestData['inpt_centre'])) {
            $this->db->where('centre_id', $requestData['inpt_centre']);
        }
        if (!empty($requestData['inpt_data']) && isset($requestData['inpt_data'])) {
            $this->db->where('users.name', $requestData['inpt_data']);
        }
        
    }

    public function count_all_staff($requestData, $manager_id)
    {
        $this->_dt_search_staff_query($requestData, $manager_id);

        return $this->db->count_all_results();
    }

    public function count_filtered_staff($requestData, $manager_id)
    {
        $this->_dt_search_staff_query($requestData, $manager_id);
        $query = $this->db->get();

        return $query->num_rows();
    }  
}
