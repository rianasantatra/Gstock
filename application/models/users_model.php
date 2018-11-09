<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Users_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function get_user($username, $passwowrd)
    {
        $this->db->where('username', $username);
        $this->db->where('password', $passwowrd);
        $query = $this->db->get('users');
        return $query->result();
    }

    public function get_user_by_id($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('users');
        return $query->result();
    }

    public function all_users()
    {
        return $this->db->get('users')->result();
    }

    public function insert($data)
    {
        $this->db->insert('users', $data);
        return $this->db->insert_id();
    }
    public function update($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('users', $data);
        return true;
    }
    /*
     * delete
     */
    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('users');
        return true;
    }

}
