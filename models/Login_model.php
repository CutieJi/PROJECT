<?php

class Grant_access_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->table = 'users';
    }

    public function signin($data)
    {
        $this->db->insert($this->table, $data);
        return true;
    }

    public function row($data)
    {
        $where = array(
            'is_deleted' => 0,
            'users_id'   => $users_id,
            'pword'      => $password
        );

        $query = $this->db->get_where($this->table, $where);
        return $query->row();
    }
}