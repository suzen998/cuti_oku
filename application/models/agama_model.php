<?php

class agama_model extends CI_model
{
    public function getagama()
    {
        return $this->db->get('agama')->result_array();
    }

    public function add()
    {
        $data = [
            "agama_nama" => $this->input->post('agama_nama', true)
        ];
        $this->db->insert('agama', $data);
    }

    public function edit()
    { }

    public function delete($id)
    {
        $this->db->delete('agama_id', ['agama_id' => $id]);
    }
}
