
<?php
class City_model extends CI_Model
{

    function get()
    {
        $hasil = $this->db->query("SELECT c.city_id as id, c.city_name as name, s.state_name as province FROM tbl_city c, tbl_state s where s.state_id=c.city_state order by c.city_name ASC");
        return $hasil->result_array();
    }

    public function getById($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_city');
        $this->db->where('city_id', $id);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function insert($data)
    {
        $this->db->insert('tbl_city', $data);
        return $this->db->insert_id();
    }

    public function update($where, $data)
    {
        $this->db->update('tbl_city', $data, $where);
        return $this->db->affected_rows();
    }


    public function delete($id)
    {
        $this->db->where('city_id', $id);
        $this->db->delete('tbl_city');
        return $this->db->affected_rows();
    }
}
