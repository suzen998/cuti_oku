<?php

class golongan_model extends CI_model
{
    public function getGol()
    {
        return $this->db->get('golongan')->result_array();
    }

    public function add()
    {
        $data = [
            "gol_id" => $this->input->post('gol_id', true),
            "gol_nama" => $this->input->post('gol_nama', true),
            "gol_ket" => $this->input->post('gol_ket', true)
        ];
        $this->db->insert('golongan', $data);
    }

    public function edit()
    { }

    public function delete($id)
    {
        $this->db->delete('gol_id', ['gol_id' => $id]);
    }
}
