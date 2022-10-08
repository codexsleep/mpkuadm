<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Store extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        admin_is_logged_in();
        $this->load->model('admin/Store_model');
        $this->load->model('admin/Staff_model');
        $this->load->model('admin/Category_model');
        $this->load->model('admin/City_model');
        $this->load->model('admin/Customer_model');
        $this->load->model('admin/Province_model');
        $this->load->model('admin/App_model');
    }

    function index()
    {
        $data['title'] = "All Toko";
        $data['authData'] =  $this->db->get_where('tbl_users', ['user_id' => $this->session->userdata('uid')])->row_array();
        $data['store'] = $this->Store_model->get();
        $this->load->view("admin/layout/header", $data);
        $this->load->view("admin/store/vw_store", $data);
        $this->load->view("admin/layout/footer", $data);
    }

    function tambah()
    {
        $data['title'] = "Tambah Toko";
        $data['authData'] =  $this->db->get_where('tbl_users', ['user_id' => $this->session->userdata('uid')])->row_array();
        $data['city'] = $this->City_model->get();
        $data['state'] = $this->Province_model->get();
        $data['category'] = $this->Category_model->get();
        $data['staff'] = $this->Staff_model->get();
        $data['customer'] = $this->Customer_model->get();
        $data['appl'] = $this->App_model->get();

        $this->form_validation->set_rules('nama', 'Nama', 'required', [
            'required' => 'Nama Wajib diisi'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view("admin/layout/header", $data);
            $this->load->view("admin/store/vw_tambah", $data);
            $this->load->view("admin/layout/footer", $data);
        } else {

            $xteknikis[]= $this->input->post('teknisi');
				foreach($xteknikis as $teknisi){
					$teknisis = @implode(",", $teknisi);
				}

            $data = [
                'store_name' => str_replace("'", "", htmlspecialchars($this->input->post('nama'), ENT_QUOTES)),
                'store_category' => str_replace("'", "", htmlspecialchars($this->input->post('kategori'), ENT_QUOTES)),
                'store_state' => str_replace("'", "", htmlspecialchars($this->input->post('provinsi'), ENT_QUOTES)),
                'store_city' => str_replace("'", "", htmlspecialchars($this->input->post('kota'), ENT_QUOTES)),
                'store_address' => str_replace("'", "", htmlspecialchars($this->input->post('alamat'), ENT_QUOTES)),
                'store_owner' => str_replace("'", "", htmlspecialchars($this->input->post('owner'), ENT_QUOTES)),
                'store_app' => str_replace("'", "", htmlspecialchars($this->input->post('aplikasi'), ENT_QUOTES)),
                'store_technician' => $teknisis,
                'store_reference' => str_replace("'", "", htmlspecialchars($this->input->post('referensi'), ENT_QUOTES)),
                'installation_date' => str_replace("'", "", htmlspecialchars($this->input->post('tanggal'), ENT_QUOTES)),
            ];
            $this->Store_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><strong> Success! </strong> Toko berhasil ditambahkan</div>');
            redirect('admin/store');
        }
    }

    public function delete($id)
    {
        $this->Category_model->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><strong> Success! </strong> Kategori berhasil dihapus</div>');
        redirect('admin/category');
    }
}
