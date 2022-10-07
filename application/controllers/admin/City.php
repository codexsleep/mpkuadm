<?php
defined('BASEPATH') or exit('No direct script access allowed');
class City extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        admin_is_logged_in();
        $this->load->model('admin/City_model');
        $this->load->model('admin/Province_model');
    }

    function index()
    {
        $data['title'] = "Manage Kota";
        $data['authData'] =  $this->db->get_where('tbl_users', ['user_id' => $this->session->userdata('uid')])->row_array();
        $data['city'] = $this->City_model->get();
        $this->load->view("admin/layout/header", $data);
        $this->load->view("admin/city/vw_city", $data);
        $this->load->view("admin/layout/footer", $data);
    }


    function tambah()
    {
        $data['title'] = "Tambah Kota";
        $data['authData'] =  $this->db->get_where('tbl_users', ['user_id' => $this->session->userdata('uid')])->row_array();
        $data['province'] = $this->Province_model->get();
        $this->form_validation->set_rules('kota', 'Kota', 'required', [
            'required' => 'Kota Wajib diisi'
        ]);

        $this->form_validation->set_rules('provinsi', 'Provinsi', 'required', [
            'required' => 'Provinsi Wajib diisi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view("admin/layout/header", $data);
            $this->load->view("admin/city/vw_tambah", $data);
            $this->load->view("admin/layout/footer", $data);
        } else {
            $data = [
                'city_name' => str_replace("'", "", htmlspecialchars($this->input->post('kota'), ENT_QUOTES)),
                'city_state' => str_replace("'", "", htmlspecialchars($this->input->post('provinsi'), ENT_QUOTES)),
            ];
            $this->City_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><strong> Success! </strong> Kota berhasil ditambahkan</div>');
            redirect('admin/city');
        }
    }
    

    function edit($id)
    {
        $data['title'] = "Edit Kota";
        $data['authData'] =  $this->db->get_where('tbl_users', ['user_id' => $this->session->userdata('uid')])->row_array();
        $data['province'] = $this->Province_model->get();
        $data['city'] = $this->City_model->getById($id);
        $this->form_validation->set_rules('kota', 'Kota', 'required', [
            'required' => 'Kota Wajib diisi'
        ]);

        $this->form_validation->set_rules('provinsi', 'Provinsi', 'required', [
            'required' => 'Provinsi Wajib diisi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view("admin/layout/header", $data);
            $this->load->view("admin/city/vw_edit", $data);
            $this->load->view("admin/layout/footer", $data);
        } else {
            $data = [
                'city_name' => str_replace("'", "", htmlspecialchars($this->input->post('kota'), ENT_QUOTES)),
                'city_state' => str_replace("'", "", htmlspecialchars($this->input->post('provinsi'), ENT_QUOTES)),
            ];
            $id = str_replace("'", "", htmlspecialchars($id, ENT_QUOTES));
            $this->City_model->update(['city_id' => $id], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><strong> Success! </strong> Kota berhasil diupdate</div>');
            redirect('admin/city');
        }
    }

    public function delete($id)
    {
        $this->City_model->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><strong> Success! </strong> Kota berhasil dihapus</div>');
        redirect('admin/city');
    }
}
