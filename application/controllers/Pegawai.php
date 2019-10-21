<?php

class pegawai extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('pegawai_model');
        $this->load->model('jabatan_model');
        $this->load->model('jcuti_model');




        //$this->load->library('form_validation');
    }

    public function index()
    {
        // load view admin/overview.php
        $this->load->view('templates/headerPegawai');

        $this->load->view('templates/footer');
    }

    public function Pengajuan()
    {
        $this->load->view('templates/headerPegawai');
        //$data['jenis_kawin'] = $this->Pengaturan_model->getJeniskawin();
        $this->load->view("pegawai/pengajuan");
        $this->load->view('templates/footer');
    }
    public function formPengajuan()
    {
        $this->load->view('templates/headerPegawai');
        $data['jabatan'] = $this->jabatan_model->getJabatanid();
        $data['jenis_cuti'] = $this->jcuti_model->getJeniscuti();
        $this->load->view("pegawai/formpengajuan", $data);
        $this->load->view('templates/footer');
    }

    public function verifikasi()
    {
        $this->load->view('templates/headerPegawai');
        //$data['jenis_kawin'] = $this->Pengaturan_model->getJeniskawin();
        $this->load->view("pegawai/Verifikasi");
        $this->load->view('templates/footer');
    }


    public function addCuti()
    { }

    public function editCuti($id = null)
    {
        if (!isset($id)) redirect('admin/products');

        $product = $this->product_model;
        $validation = $this->form_validation;
        $validation->set_rules($product->rules());

        if ($validation->run()) {
            $product->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["product"] = $product->getById($id);
        if (!$data["product"]) show_404();

        $this->load->view("admin/product/edit_form", $data);
    }

    public function deleteCuti($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->product_model->delete($id)) {
            redirect(site_url('admin/products'));
        }
    }

    //Jenis Cuti
    public function jenis_cuti()
    {
        $this->load->view('templates/header');
        $data['jenis_cuti'] = $this->jcuti_model->getJeniscuti();
        $this->load->view("pegawai/jeniscuti", $data);
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
            redirect('pegawai/formPengajuan');
        }
    }
}
