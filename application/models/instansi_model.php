<?php

class instansi_model extends CI_model
{
    public function getInstansi()
    {
        return $this->db->get('instansi')->result_array();
    }

    public function add()
    {
        $data = [
            "instansi_nama" => $this->input->post('instansi_nama', true)
        ];
        $this->db->insert('instansi', $data);
    }

    public function edit()
    { }

    public function delete($id)
    {
        $this->db->delete('instansi_id', ['instansi_id' => $id]);
    }
}
