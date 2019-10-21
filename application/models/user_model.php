<?php

class user_model extends CI_model
{
    public function getUser()
    {
        return $this->db->get('user')->result_array();
    }

    public function add()
    {
        $data = [
            "nip_baru" => $this->input->post('nip_baru', true)
        ];
        $this->db->insert('username', $data);
    }

    public function edit()
    { }

    public function delete($id)
    {
        $this->db->delete('user_id', ['user_id' => $id]);
    }
}
