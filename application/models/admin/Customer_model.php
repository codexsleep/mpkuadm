<?php
class Customer_model extends CI_Model
{

    function get()
    {
        $hasil = $this->db->query("SELECT * FROM tbl_customers order by customer_id DESC");
        return $hasil->result_array();
        
    }

    public function getById($id)
    {
       $this->db->select('*');
       $this->db->from('tbl_customers');
       $this->db->where('customer_id', $id);
       $query = $this->db->get();
       return $query->row_array();
    }

    public function insert($data)
    {
        $this->db->insert('tbl_customers', $data);
        return $this->db->insert_id();
    }


    public function update($where, $data)
    {
        $this->db->update('tbl_customers', $data, $where);
        return $this->db->affected_rows();
    }

    public function delete($id)
    {
        $this->db->where('customer_id', $id);
        $this->db->delete('tbl_customers');
        return $this->db->affected_rows();
    }

}
