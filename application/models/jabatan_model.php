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

    public function edit()
    { }

    public function delete($id)
    {
        $this->db->delete('jabatan_id', ['jabatan_id' => $id]);
    }
}
