<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        admin_is_logged_in();
        $this->load->model('admin/Dashboard_model');
    }

    function index()
    {
        $data['title'] = "Dashboard";
        
        $data['total'] = array(
            'customer' => $this->Dashboard_model->total_customer()['total'],
            'store' => 0,
            'maintanance' => 0,
            'staff' => $this->Dashboard_model->total_staff()['total']
        );
        $data['authData'] =  $this->db->get_where('tbl_users', ['user_id' => $this->session->userdata('uid')])->row_array();
        $this->load->view("admin/layout/header", $data);
        $this->load->view("admin/vw_dashboard", $data);
        $this->load->view("admin/layout/footer", $data);
    }
}
