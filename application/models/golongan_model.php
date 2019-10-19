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
            "gol_nama" => $this->input->post('gol_nama', true)
        ];
        $this->db->insert('gol_nama', $data);
    }

    public function edit()
    { }

    public function delete($id)
    {
        $this->db->delete('gol_id', ['gol_id' => $id]);
    }
}
