<?php

class Overview extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('jkawin_model');
        $this->load->model('jcuti_model');
        $this->load->model('agama_model');
        $this->load->model('pegawai_model');
        $this->load->model('golongan_model');
        $this->load->model('unor_model');
        $this->load->model('jabatan_model');
        $this->load->model('instansi_model');
        $this->load->model('user_model');



        $this->load->library('form_validation');
    }

    public function login()
    {
        $this->load->view('login/login');
    }

    public function index()
    {
        // load view admin/overview.php
        $this->load->view('templates/header');

        $this->load->view('templates/footer');
    }

    //User
    public function user()
    {
        $this->load->view('templates/header');
        $data['user'] = $this->user_model->getUser();
        $this->load->view("admin/user", $data);
        $this->load->view('templates/footer');
    }

    public function addUser()
    {

        $this->form_validation->set_rules('user', 'user', 'required');

        if ($this->form_validation->run() == false) {
            redirect('admin/Overview/');
        } else {
            $this->user_model->add();
            redirect('admin/Overview/user');
        }
    }

    //Jabatan
    public function jabatan()
    {
        $this->load->view('templates/header');
        $data['jabatan'] = $this->jabatan_model->getJabatan();
        $this->load->view("admin/jabatan", $data);
        $this->load->view('templates/footer');
    }

    public function addJabatan()
    {

        $this->form_validation->set_rules('jabatan_id', 'jabatan_id', 'required');
        $this->form_validation->set_rules('uraian', 'uraian', 'required');

        if ($this->form_validation->run() == false) {
            redirect('admin/Overview/');
        } else {
            $this->unor_model->add();
            redirect('admin/Overview/jabatan');
        }
    }

    //Unit Organisasi
    public function unor()
    {
        $this->load->view('templates/header');
        $data['unor'] = $this->unor_model->getUnor();
        $this->load->view("admin/unor", $data);
        $this->load->view('templates/footer');
    }

    public function addUnor()
    {
        $this->form_validation->set_rules('unor_nama', 'unor_nama', 'required');

        if ($this->form_validation->run() == false) {
            redirect('admin/Overview/');
        } else {
            $this->unor_model->add();
            redirect('admin/Overview/unor');
        }
    }

    //Golongan
    public function golongan()
    {
        $this->load->view('templates/header');
        $data['golongan'] = $this->golongan_model->getGol();
        $this->load->view("admin/golongan", $data);
        $this->load->view('templates/footer');
    }

    public function addGolongan()
    {
        $this->form_validation->set_rules('gol_id', 'gol_id', 'required');
        $this->form_validation->set_rules('gol_nama', 'gol_nama', 'required');
        $this->form_validation->set_rules('gol_ket', 'gol_ket', 'required');

        if ($this->form_validation->run() == false) {
            redirect('admin/Overview/');
        } else {
            $this->golongan_model->add();
            redirect('admin/Overview/golongan');
        }
    }

    //Instansi
    public function instansi()
    {
        $this->load->view('templates/header');
        $data['instansi'] = $this->instansi_model->getInstansi();
        $this->load->view("admin/instansi", $data);
        $this->load->view('templates/footer');
    }

    public function addInstansi()
    {
        $this->form_validation->set_rules('instansi_nama', 'instansi_nama', 'required');

        if ($this->form_validation->run() == false) {
            redirect('admin/Overview/');
        } else {
            $this->instansi_model->add();
            redirect('admin/Overview/instansi');
        }
    }

    //Jenis Kawin
    public function jeniskawin()
    {
        $this->load->view('templates/header');
        $data['jenis_kawin'] = $this->jkawin_model->getJeniskawin();
        $this->load->view("admin/jeniskawin", $data);
        $this->load->view('templates/footer');
    }

    public function tbhjeniskawin()
    {
        $this->form_validation->set_rules('jenis_kawin_nama', 'jenis_kawin_nama', 'required');

        if ($this->form_validation->run() == false) {
            redirect('admin/Overview/');
        } else {
            $this->jkawin_model->add();
            redirect('admin/Overview/jeniskawin');
        }
    }

    //Jenis Cuti
    public function jenis_cuti()
    {
        $this->load->view('templates/header');
        $data['jenis_cuti'] = $this->jcuti_model->getJeniscuti();
        $this->load->view("admin/jeniscuti", $data);
        $this->load->view('templates/footer');
    }

    public function tbhjeniscuti()
    {
        $this->form_validation->set_rules('jcuti_nama', 'jcuti_nama', 'required');
        $this->form_validation->set_rules('quota', 'quota', 'required|numeric');
        $this->form_validation->set_rules('periode', 'periode', 'required');

        if ($this->form_validation->run() == false) {
            redirect('admin/Overview/');
        } else {
            $this->jcuti_model->add();
            redirect('admin/Overview/jenis_cuti');
        }
    }

    //Agama
    public function Agama()
    { {
            $this->load->view('templates/header');
            $data['agama'] = $this->agama_model->getagama();
            $this->load->view("admin/agama", $data);
            $this->load->view('templates/footer');
        }
    }

    public function addAgama()
    {
        $this->form_validation->set_rules('agama_nama', 'agama_nama', 'required');

        if ($this->form_validation->run() == false) {
            redirect('admin/Overview/');
        } else {
            $this->agama_model->add();
            redirect('admin/Overview/agama');
        }
    }

    //Tambah Data Pegawai
    public function Pegawai()
    {
        $this->load->view('templates/header');
        $data['golongan'] = $this->pegawai_model->golongan();
        $data['agama'] = $this->pegawai_model->agama();
        $data['jabatan'] = $this->pegawai_model->jabatan();
        $data['instansi'] = $this->pegawai_model->instansi();
        $data['unor'] = $this->pegawai_model->unor();
        $data['jenis_kawin'] = $this->pegawai_model->kawin();
        $this->load->view("admin/tbhDataPegawai", $data);
        $this->load->view('templates/footer');
    }

    public function tbhDataPegawai()
    {
        // $this->form_validation->set_rules('nama_pns', 'nama_pns', 'required');
        // $this->form_validation->set_rules('nip_lama', 'nip_lama', 'required|numeric');
        // $this->form_validation->set_rules('nip_baru', 'nip_baru', 'required|numeric');
        // $this->form_validation->set_rules('gelar_dpn', 'gelar_dpn', 'required');
        // $this->form_validation->set_rules('gelar_blk', 'gelar_blk', 'required');
        // $this->form_validation->set_rules('nik', 'nik', 'required|numeric');
        // $this->form_validation->set_rules('gol_id', 'gol_id', 'required');
        // $this->form_validation->set_rules('tempat_lahir', 'tempat_lahir', 'required');
        // $this->form_validation->set_rules('tgl_lahir', 'tgl_lahir', 'required');
        // $this->form_validation->set_rules('jenis_kelamin', 'jenis_kelamin', 'required');
        // $this->form_validation->set_rules('jenis_kawin_id', 'jenis_kawin', 'required');
        // $this->form_validation->set_rules('agama_id', 'agama_id', 'required');
        // $this->form_validation->set_rules('no_hp', 'no_hp', 'required|numeric');
        // $this->form_validation->set_rules('alamat', 'alamat', 'required');
        // $this->form_validation->set_rules('jabatan', 'jabatan', 'required');
        // $this->form_validation->set_rules('jenis_pegawai', 'jenis_pegawai', 'required');
        // $this->form_validation->set_rules('instansi_id', 'instansi_id', 'required');
        // $this->form_validation->set_rules('unor_id', 'unor_id', 'required');
        // $this->form_validation->set_rules('status_pns', 'status_pns', 'required');
        // $this->form_validation->set_rules('kategori', 'kategori', 'required');

        // if ($this->form_validation->run() == false) {
        //     redirect('admin/Overview/');
        // } else {
        //     $this->session->set_flashdata('flash', 'Ditambahkan');
        //     redirect('admin/Overview/Pegawai');
        // }
        $this->pegawai_model->add();
        redirect('admin/Overview/pegawaiNonRegis');
    }

    public function pegawaiNonRegis()
    {
        $data['page'] = 'pegawaiNonRegis';
        $data['nonregis'] = $this->pegawai_model->getNonRegis();
        $this->load->view('templates/header', $data);
        $this->load->view('admin/pegawaiNonRegis', $data);
        $this->load->view('templates/footer');
    }
}
