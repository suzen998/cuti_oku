<?php

class jabatan_model extends CI_model
{
    public function getJabatan()
    {
        return $this->db->get('jabatan')->result_array();
    }

    public function add()
    {
        $data = [
            "jabatan_id" => $this->input->post('jabatan_id', true),
            "uraian" => $this->input->post('uraian', true)
        ];
        $this->db->insert('jabatan', $data);
    }

    public function getJabatanid()
    {
        return $this->db->get_where('jabatan', ['jabatan_id' => $this->session->userdata('jabatan_id')])->result_array();
    }

    public function edit()
    { }

    public function delete($id)
    {
        $this->db->delete('jabatan_id', ['jabatan_id' => $id]);
    }
}
