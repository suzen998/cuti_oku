<?php

class pegawai_model extends CI_model
{
    public function golongan()
    {
        return $this->db->get('golongan')->result_array();
    }

    public function kawin()
    {
        return $this->db->get('jenis_kawin')->result_array();
    }

    public function agama()
    {
        return $this->db->get('agama')->result_array();
    }

    public function jabatan()
    {
        return $this->db->get('jabatan')->result_array();
    }

    public function instansi()
    {
        return $this->db->get('instansi')->result_array();
    }

    public function unor()
    {
        return $this->db->get('unor')->result_array();
    }

    public function add()
    {
        $data = [
            "nama_pns" => $this->input->post('nama_pns', true),
            "nip" => $this->input->post('nip', true),
            "gelar_dpn" => $this->input->post('gelar_dpn', true),
            "gelar_blk" => $this->input->post('gelar_blk', true),
            "nik" => $this->input->post('nik', true),
            "gol_id" => $this->input->post('gol_id', true),
            "tempat_lahir" => $this->input->post('tempat_lahir', true),
            "tgl_lahir" => $this->input->post('tgl_lahir', true),
            "jenis_kelamin" => $this->input->post('jenis_kelamin', true),
            "jenis_kawin_id" => $this->input->post('jenis_kawin_id', true),
            "agama_id" => $this->input->post('agama_id', true),
            "no_hp" => $this->input->post('no_hp', true),
            "alamat" => $this->input->post('alamat', true),
            "jabatan_id" => $this->input->post('jabatan_id', true),
            "jenis_pegawai" => $this->input->post('jenis_pegawai', true),
            "instansi_id" => $this->input->post('instansi_id', true),
            "unor_id" => $this->input->post('unor_id', true),
            "status_pns" => $this->input->post('status_pns', true)

        ];
        $this->db->insert('pegawai', $data);
    }

    public function getNonRegis()
    {
        return $this->db->get('pegawai')->result_array();
    }
}
