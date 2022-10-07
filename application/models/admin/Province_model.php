<?php
class Province_model extends CI_Model
{

    function get()
    {
        $hasil = $this->db->query("SELECT * FROM tbl_state order by state_name ASC");
        return $hasil->result_array();
    }

    public function getById($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_state');
        $this->db->where('state_id', $id);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function insert($data)
    {
        $this->db->insert('tbl_state', $data);
        return $this->db->insert_id();
    }

    public function update($where, $data)
    {
        $this->db->update('tbl_state', $data, $where);
        return $this->db->affected_rows();
    }


    public function delete($id)
    {
        $this->db->where('state_id', $id);
        $this->db->delete('tbl_state');
        return $this->db->affected_rows();
    }
}
