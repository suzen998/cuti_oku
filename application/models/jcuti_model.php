<?php

class jcuti_model extends CI_model
{
    public function getJeniscuti()
    {
        return $this->db->get('jenis_cuti')->result_array();
    }

    public function add()
    {
        $data = [
            "jcuti_nama" => $this->input->post('jcuti_nama', true),
            "quota" => $this->input->post('quota', true),
            "ket_waktu" => $this->input->post('periode', true)
        ];
        $this->db->insert('jenis_cuti', $data);
    }

    public function edit()
    { }

    public function delete($id)
    {
        $this->db->delete('jenis_cuti_id', ['jenis_cuti_id' => $id]);
    }
}
