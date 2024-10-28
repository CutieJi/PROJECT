<?php

class Employees_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->table = 'employee';
    }

    public function add($data)
    {
        $this->db->insert($this->table, $data);
        return true;
    }

    public function rows()
    {
        $where = array(
            'is_deleted' => 0
        );

        $query = $this->db->get_where($this->table, $where);
        return $query->result();
    }

    public function row($id)
    {
        $where = array(
            'is_deleted' => 0,
            'id' => $id
        );

        $query = $this->db->get_where($this->table, $where);
        return $query->row();
    }

       // select * from users where emp_id = 'value' and is_deleted = '0'

    public function update($id, $data)
    {
        $where = array(
            'is_deleted' => 0,
            'id' => $id
        );

        $query = $this->db->update($this->table, $data, $where);
        return true;
    }

    public function delete($id)
    {
        $where = array(
            'is_deleted' => 0,
            'id' => $id
        );
    }
}