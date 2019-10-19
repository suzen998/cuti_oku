<?php

class unor_model extends CI_model
{
    public function getUnor()
    {
        return $this->db->get('unor')->result_array();
    }

    public function add()
    {
        $data = [
            "unor_nama" => $this->input->post('unor_nama', true)
        ];
        $this->db->insert('unor_nama', $data);
    }

    public function edit()
    { }

    public function delete($id)
    {
        $this->db->delete('unor_id', ['unor_id' => $id]);
    }
}
