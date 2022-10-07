<?php
class Store_model extends CI_Model
{

    function get()
    {
        $hasil = $this->db->query("SELECT * FROM tbl_store t, tbl_categories k, tbl_state p, tbl_city c, tbl_customers cu, tbl_app a
         where k.category_id=t.store_category and 
         p.state_id=t.store_state and 
         c.city_id=t.store_city and
         cu.customer_id=t.store_owner and
         a.app_id=t.store_app
         order by store_id ASC");
        return $hasil->result_array();
    }

    public function getById($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_store');
        $this->db->where('store_id', $id);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function insert($data)
    {
        $this->db->insert('tbl_store', $data);
        return $this->db->insert_id();
    }

    public function update($where, $data)
    {
        $this->db->update('tbl_store', $data, $where);
        return $this->db->affected_rows();
    }


    public function delete($id)
    {
        $this->db->where('store_id', $id);
        $this->db->delete('tbl_store');
        return $this->db->affected_rows();
    }
}
