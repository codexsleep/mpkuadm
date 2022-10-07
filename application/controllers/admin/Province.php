<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Province extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        admin_is_logged_in();
        $this->load->model('admin/Province_model');
    }

    function index()
    {
        $data['title'] = "Provinsi";
        $data['authData'] =  $this->db->get_where('tbl_users', ['user_id' => $this->session->userdata('uid')])->row_array();
        $data['province'] = $this->Province_model->get();
        $this->load->view("admin/layout/header", $data);
        $this->load->view("admin/province/vw_province", $data);
        $this->load->view("admin/layout/footer", $data);
    }


    function tambah()
    {
        $data['title'] = "Tambah Provinsi";
        $data['authData'] =  $this->db->get_where('tbl_users', ['user_id' => $this->session->userdata('uid')])->row_array();

        $this->form_validation->set_rules('provinsi', 'Provinsi', 'required', [
            'required' => 'Provinsi Wajib diisi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view("admin/layout/header", $data);
            $this->load->view("admin/province/vw_tambah", $data);
            $this->load->view("admin/layout/footer", $data);
        } else {
            $data = [
                'state_name' => str_replace("'", "", htmlspecialchars($this->input->post('provinsi'), ENT_QUOTES)),
            ];
            $this->Province_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><strong> Success! </strong> Provinsi berhasil ditambahkan</div>');
            redirect('admin/province');
        }
    }
    

    function edit($id)
    {
        $data['title'] = "Edit Provinsi";
        $data['authData'] =  $this->db->get_where('tbl_users', ['user_id' => $this->session->userdata('uid')])->row_array();
        $data['province'] = $this->Province_model->getById($id);
        $this->form_validation->set_rules('provinsi', 'Provinsi', 'required', [
            'required' => 'Provinsi Wajib diisi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view("admin/layout/header", $data);
            $this->load->view("admin/province/vw_edit", $data);
            $this->load->view("admin/layout/footer", $data);
        } else {
            $data = [
                'state_name' => str_replace("'", "", htmlspecialchars($this->input->post('provinsi'), ENT_QUOTES)),
            ];
            $id = str_replace("'", "", htmlspecialchars($id, ENT_QUOTES));
            $this->Province_model->update(['state_id' => $id], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><strong> Success! </strong> Provinsi berhasil ditambahkan</div>');
            redirect('admin/province');
        }
    }

    public function delete($id)
    {
        $this->Province_model->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><strong> Success! </strong> Provinsi berhasil dihapus</div>');
        redirect('admin/province');
    }
}
