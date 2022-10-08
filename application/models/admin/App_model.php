<?php
class App_model extends CI_Model
{

    function get()
    {
        $hasil = $this->db->query("SELECT * FROM tbl_app order by app_id ASC");
        return $hasil->result_array();
    }

    public function getById($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_app');
        $this->db->where('app_id', $id);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function insert($data)
    {
        $this->db->insert('tbl_app', $data);
        return $this->db->insert_id();
    }

    public function update($where, $data)
    {
        $this->db->update('tbl_app', $data, $where);
        return $this->db->affected_rows();
    }


    public function delete($id)
    {
        $this->db->where('app_id', $id);
        $this->db->delete('tbl_app');
        return $this->db->affected_rows();
    }
}
