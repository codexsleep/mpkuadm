<?php
class Staff_model extends CI_Model
{

    function get()
    {
        $hasil = $this->db->query("SELECT * FROM tbl_users order by user_id DESC");
        return $hasil->result_array();
    }

    public function getById($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_users');
        $this->db->where('user_id', $id);
        $query = $this->db->get();
        return $query->row_array();
    }

    
    public function getByMultipleId($id)
    {
        $hasil = $this->db->query("SELECT * FROM tbl_users WHERE user_id in ($id)");
        return $hasil->result_array();
    }


    public function insert($data)
    {
        $this->db->insert('tbl_users', $data);
        return $this->db->insert_id();
    }

    public function update($where, $data)
    {
        $this->db->update('tbl_users', $data, $where);
        return $this->db->affected_rows();
    }


    public function delete($id)
    {
        $this->db->where('user_id', $id);
        $this->db->delete('tbl_users');
        return $this->db->affected_rows();
    }
}
