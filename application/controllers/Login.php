<?php

class Login extends CI_controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
        $this->load->library('form_validation');
    }

    public function login()
    {
        $nip    = $this->input->post('nip', TRUE);
        $pass = md5($this->input->post('password', TRUE));
        $validate = $this->login_model->login($nip, $pass);
        if ($validate->num_rows() > 0) {
            $data  = $validate->row_array();
            $nip  = $data['nip'];
            $role_id = $data['role_id'];
            $sesdata = array(
                'nip'     => $nip,
                'role_id'    => $role_id,
                'logged_in' => TRUE
            );
            $this->session->set_userdata($sesdata);
            if ($role_id == 2) {
                redirect('pegawai/');
            } else {
                redirect('admin/');
            }
        } else {
            echo $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert"><b>NIPD</b> dan <b>Password</b> tidak cocok</div>');
            redirect('welcome/login');
        }
    }

    public function auth()
    {
        $nip_baru = $this->input->post('nip_baru', TRUE);
        $nama_pns = $this->input->post('nama_pns', TRUE);
        $no_hp = $this->input->post('no_hp', TRUE);
        $validate = $this->login_model->validate($nip_baru, $nama_pns, $no_hp);
        if ($validate->num_rows() > 0) {
            $data  = $validate->row_array();
            $user_id  = $data['user_id'];
            $nama_pns  = $data['nama_pns'];
            $no_hp  = $data['no_hp'];
            $no = $data['nip_baru'];
            $sesdata = array(
                'user_id'  => $user_id,
                'nama_pns'  => $nama_pns,
                'no_hp'  => $no_hp,
                'nip_baru'     => $no,
                'logged_in' => TRUE
            );
            $this->session->set_userdata($sesdata);
            if ($no) {
                $data['nama_pns'] = $nama_pns;
                redirect('login/regis', $data);
            } else {
                redirect('login/');
            }
        } else {
            echo $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert"><b>NIP</b> dan <b>Nama Lengkap</b> dan <b>No Telp</b> tidak cocok</div>');
            redirect('login/validasi');
        }
    }

    public function tbhUser()
    {
        $this->form_validation->set_rules('password', 'Password', 'required');
        $user_id = $this->session->userdata('user_id');
        if ($this->form_validation->run() == false) {
            redirect('login/validasi');
        } else {
            $this->login_model->addUser();
            redirect('welcome/login');
        }
    }

    public function validasi()
    {
        $this->load->view('login/validasi');
    }

    public function regis()
    {
        $this->load->view('login/registrasi');
    }

    function logout()
    {
        $this->session->sess_destroy();
        redirect('welcome/login');
    }
}
