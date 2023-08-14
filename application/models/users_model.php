<?php

class Users_model extends CI_Model {

    public function index()
    {
        return $this->db->get("tb_users")->result_array();
    }


    public function store($user)
    {
        $this->db->insert("tb_users", $user);
    }

    public function five_users()
    {
        
        #$this->db->order_by('id', 'desc');
        $this->db->limit(5);
        return $this->db->get("tb_users")->result_array();

    }

    
}