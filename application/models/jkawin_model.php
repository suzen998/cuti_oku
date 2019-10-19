<?php

class jkawin_model extends CI_model
{
    public function getJeniskawin()
    {
        return $this->db->get('jenis_kawin')->result_array();
    }

    public function add()
    {
        $data = [
            "jenis_kawin_nama" => $this->input->post('jenis_kawin_nama', true)
        ];
        $this->db->insert('jenis_kawin', $data);
    }

    public function edit()
    { }

    public function delete($id)
    {
        $this->db->delete('jenis_kawin_id', ['jenis_kawin_id' => $id]);
    }
}
