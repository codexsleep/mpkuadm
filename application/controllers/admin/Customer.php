<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Customer extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        admin_is_logged_in();
        $this->load->model('admin/Customer_model');
    }

    function index()
    {
        redirect('admin/customer/all');
    }

    function all()
    {
        $data['title'] = "All Customer";
        $data['authData'] =  $this->db->get_where('tbl_users', ['user_id' => $this->session->userdata('uid')])->row_array();
        $data['customer'] = $this->Customer_model->get();
        $this->load->view("admin/layout/header", $data);
        $this->load->view("admin/customer/vw_customer", $data);
        $this->load->view("admin/layout/footer", $data);
    }

    function tambah()
    {
        $data['title'] = "Tambah Customer";
        $data['authData'] =  $this->db->get_where('tbl_users', ['user_id' => $this->session->userdata('uid')])->row_array();

        $this->form_validation->set_rules('nama', 'Nama Customer', 'required', [
            'required' => 'Nama Customer Wajib diisi'
        ]);

        $this->form_validation->set_rules('nohp', 'No Hp Customer', 'required', [
            'required' => 'No Hp Wajib diisi'
        ]);

        $this->form_validation->set_rules('jeniskelamin', 'Jenis Kelamin Customer', 'required', [
            'required' => 'Jenis Kelamin Wajib diisi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view("admin/layout/header", $data);
            $this->load->view("admin/customer/vw_tambah", $data);
            $this->load->view("admin/layout/footer", $data);
        } else {
            $data = [
                'customer_name' => str_replace("'", "", htmlspecialchars($this->input->post('nama'), ENT_QUOTES)),
                'customer_sex' => str_replace("'", "", htmlspecialchars($this->input->post('jeniskelamin'), ENT_QUOTES)),
                'customer_phonenumber' => str_replace("'", "", htmlspecialchars($this->input->post('nohp'), ENT_QUOTES)),
            ];
            $this->Customer_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><strong> Success! </strong> Customer berhasil ditambahkan</div>');
            redirect('admin/customer');
        }
    }

    
    public function edit($id)
    {
      
        $data['title'] = "Edit Customer";
        $data['authData'] =  $this->db->get_where('tbl_users', ['user_id' => $this->session->userdata('uid')])->row_array();
        $data['customer'] = $this->Customer_model->getById($id);
        $this->form_validation->set_rules('nama', 'Nama Customer', 'required', [
            'required' => 'Nama Customer Wajib diisi'
        ]);

        $this->form_validation->set_rules('nohp', 'No Hp Customer', 'required', [
            'required' => 'No Hp Wajib diisi'
        ]);

        $this->form_validation->set_rules('jeniskelamin', 'Jenis Kelamin Customer', 'required', [
            'required' => 'Jenis Kelamin Wajib diisi'
        ]);

        if ($this->form_validation->run() == false) 
        {
            $this->load->view("admin/layout/header", $data);
            $this->load->view("admin/customer/vw_edit", $data);
            $this->load->view("admin/layout/footer", $data);
        } 
        else 
        {
            $data = [
                'customer_name' => str_replace("'", "", htmlspecialchars($this->input->post('nama'), ENT_QUOTES)),
                'customer_sex' => str_replace("'", "", htmlspecialchars($this->input->post('jeniskelamin'), ENT_QUOTES)),
                'customer_phonenumber' => str_replace("'", "", htmlspecialchars($this->input->post('nohp'), ENT_QUOTES)),
                'update_at' => date('Y-m-d H:i:s'),
            ];
            $id = str_replace("'", "", htmlspecialchars($id, ENT_QUOTES));
            $this->Customer_model->update(['customer_id' => $id], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><strong> Success! </strong> Customer berhasil ditambahkan</div>');           
            redirect('admin/customer');
        }
    }


    public function delete($id)
    {
        $this->Customer_model->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><strong> Success! </strong> Customer berhasil dihapus</div>');     
        redirect('admin/customer');
    }
}
