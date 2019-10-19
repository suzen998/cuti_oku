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
            "username" => $this->input->post('username', true)
        ];
        $this->db->insert('username', $data);
    }

    public function edit()
    { }

    public function delete($id)
    {
        $this->db->delete('jenis_kawin_id', ['jenis_kawin_id' => $id]);
    }
}
