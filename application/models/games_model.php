<?php

class Games_model extends CI_Model {

    public function index()
    {
        return $this->db->get("tb_games")->result_array();
    }


    public function store($game)
    {
        $this->db->insert("tb_games", $game);
    }

    public function show($id)
    {
       return $this->db->get_where("tb_games", array(
        "id" => $id
       ))->row_array();
    }

    public function five_games()
    {
        
        #$this->db->order_by('id', 'desc');
        $this->db->limit(5);
        return $this->db->get("tb_games")->result_array();

    }

    
}