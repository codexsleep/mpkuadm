<?php
class Category_model extends CI_Model
{

    function get()
    {
        $hasil = $this->db->query("SELECT * FROM tbl_categories order by category_id ASC");
        return $hasil->result_array();
    }

    public function getById($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_categories');
        $this->db->where('category_id', $id);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function insert($data)
    {
        $this->db->insert('tbl_categories', $data);
        return $this->db->insert_id();
    }

    public function update($where, $data)
    {
        $this->db->update('tbl_categories', $data, $where);
        return $this->db->affected_rows();
    }


    public function delete($id)
    {
        $this->db->where('category_id', $id);
        $this->db->delete('tbl_categories');
        return $this->db->affected_rows();
    }
}
