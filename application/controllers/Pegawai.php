<?php

class pegawai extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('pegawai_model');
        //$this->load->model('cuti_model');
        //$this->load->model('pengajuan_model');




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
        //$data['jenis_kawin'] = $this->Pengaturan_model->getJeniskawin();
        $this->load->view("pegawai/formpengajuan");
        $this->load->view('templates/footer');
    }



    public function addCuti()
    {
        $transaksi = $this->pegawai_model;
        $validation = $this->form_validation;
        $validation->set_rules($product->rules());

        if ($validation->run()) {
            $product->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/product/new_form");
    }

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
}
