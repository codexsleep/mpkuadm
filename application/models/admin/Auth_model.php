<?php
class Auth_model extends CI_Model{

    function get($email){
        $query=$this->db->query("SELECT * FROM tbl_users WHERE user_email='$email' LIMIT 1");
        return $query;
    }

}
