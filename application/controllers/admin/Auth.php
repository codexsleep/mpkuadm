<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('cookie', 'url'));
        $this->load->model('admin/Auth_model');
    }

    function index(){
        redirect('admin/auth/signin');
    }

    function signin()
    {
        admin_is_logged_in("auth");
        if (isset($_REQUEST['is_ajax']) && $_REQUEST['is_ajax']) {
            $email = str_replace("'", "", htmlspecialchars($_REQUEST['email'], ENT_QUOTES));
            $password = str_replace("'", "", htmlspecialchars($_REQUEST['password'], ENT_QUOTES));
            if (preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", trim($email))) { //validation email
                if ($email != null && $password != null) {
                    $userData = $this->Auth_model->get($email); //result user data
                    if ($userData->num_rows() > 0) {
                        $result = $userData->row();
                        if (password_verify($password, $result->user_password)) {

                            if ($_POST['remember'] == 1) {
                                set_cookie('autologged', encrypt_str('{"uid": ' . $result->user_id . ',"email": "' . $email . '"}'), '1209600');
                            }
                            $data = [
                                'logged' => TRUE,
                                'uid' => $result->user_id,
                                'email' => $email
                            ];
                            $this->session->set_userdata($data);
                            echo "0";
                        }
                    }
                }
            }
        } else {
            $data['title'] = "Sign In";
            $this->load->view("admin/layout/auth_header", $data);
            $this->load->view("admin/auth/vw_signin");
            $this->load->view("admin/layout/auth_footer", $data);
        }
    }

    function logout()
    {
        $this->session->unset_userdata('email');
		$this->session->unset_userdata('uid');
        $this->session->unset_userdata('logged');
        $this->session->set_userdata(array());
        $this->session->sess_destroy();
        delete_cookie("autologged");
        redirect(base_url("admin/auth/signin"));

    }
}
