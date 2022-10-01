<?php
class Dashboard_model extends CI_Model
{

    function total_customer()
    {
        $this->db->select('count(*) as total');
        $this->db->from('tbl_customers');
        $query = $this->db->get();
        return $query->row_array();
    }

    function total_staff()
    {
        $this->db->select('count(*) as total');
        $this->db->from('tbl_users');
        $query = $this->db->get();
        return $query->row_array();
    }

}
