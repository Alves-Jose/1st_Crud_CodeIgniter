<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Games extends CI_Controller {
	
	public function index()
	{
		$this->load->model('games_model');
		$data['games'] = $this->games_model->index();
        $data['title']  = 'Games - CodeIgniter';
		
        $this->load->view('templates/header', $data);
        $this->load->view('templates/nav-top', $data);
        $this->load->view('templates/footer', $data);
        $this->load->view('templates/js', $data);
        $this->load->view('pages/games', $data);
        

	}

    public function new()
    {
        $data['title']  = 'Games - CodeIgniter';
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/nav-top', $data);
        $this->load->view('pages/form-games', $data);
        $this->load->view('templates/footer', $data);
        $this->load->view('templates/js', $data);
        
    }

    public function store()
    {   
        $game = $_POST;
        $game["user_id"] = '1';
        $this->load->model("games_model");
        $this->games_model->store($game);
        redirect("dashboard");
    }

    public function edit($id)
    {
        $this->load->model('games_model');
		$data['game'] = $this->games_model->show($id);
        $data['title']  = 'Editar Game - CodeIgniter';

        print "<pre>";
        print_r($data);
        print ">/pre<";
		exit();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/nav-top', $data);
        $this->load->view('templates/footer', $data);
        $this->load->view('templates/js', $data);
        $this->load->view('pages/form-games', $data);
    }
}
