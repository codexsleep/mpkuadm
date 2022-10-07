<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Category extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        admin_is_logged_in();
        $this->load->model('admin/Category_model');
    }

    function index()
    {
        $data['title'] = "Kategori";
        $data['authData'] =  $this->db->get_where('tbl_users', ['user_id' => $this->session->userdata('uid')])->row_array();
        $data['category'] = $this->Category_model->get();
        $this->load->view("admin/layout/header", $data);
        $this->load->view("admin/category/vw_category", $data);
        $this->load->view("admin/layout/footer", $data);
    }


    function tambah()
    {
        $data['title'] = "Tambah Kategori";
        $data['authData'] =  $this->db->get_where('tbl_users', ['user_id' => $this->session->userdata('uid')])->row_array();

        $this->form_validation->set_rules('kategori', 'Kategori', 'required', [
            'required' => 'Kategori Wajib diisi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view("admin/layout/header", $data);
            $this->load->view("admin/category/vw_tambah", $data);
            $this->load->view("admin/layout/footer", $data);
        } else {
            $data = [
                'category_name' => str_replace("'", "", htmlspecialchars($this->input->post('kategori'), ENT_QUOTES)),
            ];
            $this->Category_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><strong> Success! </strong> Kategori berhasil ditambahkan</div>');
            redirect('admin/category');
        }
    }
    

    function edit($id)
    {
        $data['title'] = "Edit Kategori";
        $data['authData'] =  $this->db->get_where('tbl_users', ['user_id' => $this->session->userdata('uid')])->row_array();
        $data['category'] = $this->Category_model->getById($id);
        $this->form_validation->set_rules('kategori', 'Kategori', 'required', [
            'required' => 'Kategori Wajib diisi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view("admin/layout/header", $data);
            $this->load->view("admin/category/vw_edit", $data);
            $this->load->view("admin/layout/footer", $data);
        } else {
            $data = [
                'category_name' => str_replace("'", "", htmlspecialchars($this->input->post('kategori'), ENT_QUOTES)),
                'update_at' => date('Y-m-d H:i:s'),
            ];
            $id = str_replace("'", "", htmlspecialchars($id, ENT_QUOTES));
            $this->Category_model->update(['category_id' => $id], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><strong> Success! </strong> Kategori berhasil ditambahkan</div>');
            redirect('admin/category');
        }
    }

    public function delete($id)
    {
        $this->Category_model->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><strong> Success! </strong> Kategori berhasil dihapus</div>');
        redirect('admin/category');
    }
}
