<?php
class Staff_model extends CI_Model {

    function __construct()
    {
        parent::__construct();

        $this->users_table  = 'users';
    }

    public function dt_search_staff($requestData, $centre_id)
    {
        $this->_dt_search_staff_query($requestData, $centre_id);

        if ($requestData['length'] != -1)
            $this->db->limit($requestData['length'], $requestData['start']);

        $query = $this->db->get();
        // print_r($this->db->last_query());
        // exit;
        return $query->result_array();
    }

    private function _dt_search_staff_query($requestData, $centre_id)
    {
        $this->db->select('*');
        $this->db->from('joined_event');
        $this->db->join('users', 'joined_event.user_id = users.id');
        $this->db->where('users.status', '1');
        $this->db->where('joined_event.centre_id', $centre_id);
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
            $this->db->where('joined_event.event_id', $requestData['inpt_centre']);
        }
        if (!empty($requestData['inpt_data']) && isset($requestData['inpt_data'])) {
            $this->db->where('users.name', $requestData['inpt_data']);
        }
        
    }

    public function count_all_staff($requestData, $centre_id)
    {
        $this->_dt_search_staff_query($requestData, $centre_id);

        return $this->db->count_all_results();
    }

    public function count_filtered_staff($requestData, $centre_id)
    {
        $this->_dt_search_staff_query($requestData, $centre_id);
        $query = $this->db->get();

        return $query->num_rows();
    }  
}
