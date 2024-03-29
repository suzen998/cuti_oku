<?php

class login_model extends CI_model
{
    function login($username, $pass)
    {
        $this->db->where('username', $username);
        $this->db->where('password', $pass);
        $result = $this->db->get('user', 1);
        return $result;
    }

    function validate($nip, $nama_pns, $no_hp)
    {
        $this->db->where('nip', $nip);
        $this->db->where('nama_pns', $nama_pns);
        $this->db->where('no_hp', $no_hp);
        $result = $this->db->get('pegawai', 1);
        return $result;
    }

    // function deleteTmp($id)
    // {
    //     $this->db->delete('siswa_tmp', ['id' => $id]);
    // }

    function addUser()
    {
        $data = [
            "username" => $this->session->userdata('username'),
            "password" => md5($this->input->post('password', true)),
            "role_id" => 2
        ];

        $this->db->insert('user', $data);
    }

    function addUserAdmin()
    {
        $data = [
            "username" => $this->session->userdata('nip'),
            "password" => md5($this->input->post('password', true)),
            "role_id" => 1
        ];

        $this->db->insert('user', $data);
    }

    function is_role()
    {
        return $this->session->userdata('role_id');
    }

    function getAdmin()
    {
        $role_id = '1'; //tampilkan role admin
        $nama_pns = 'admin'; //tampilkan role admin
        return $this->db->get_where('user', ['role_id' => $role_id, 'nama_pns' => $nama_pns])->result_array();
    }

    function deleteAdmin($user_id)
    {
        $this->db->delete('user', ['id' => $user_id]);
    }
}
