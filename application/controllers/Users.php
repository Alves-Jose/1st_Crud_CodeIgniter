<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
	
	public function index()
	{
		$this->load->model('users_model');
		$data['users'] = $this->users_model->index();

        $data['title']  = 'Users - CodeIgniter';
		
        $this->load->view('templates/header', $data);
        $this->load->view('templates/nav-top', $data);
        $this->load->view('templates/footer', $data);
        $this->load->view('templates/js', $data);
        $this->load->view('pages/users', $data);
        
        
	}

     public function new()
    {
        $data['title']  = 'New User';
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/nav-top', $data);
        $this->load->view('pages/form-users', $data);
        $this->load->view('templates/footer', $data);
        $this->load->view('templates/js', $data);
        
    }
    public function store()
    {   
        $user = $_POST;
        $this->load->model("users_model");
        $this->users_model->store($user);
        redirect("dashboard");
    }

    public function edit()
    {
        $data['title']  = 'Edit User';
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/nav-top', $data);
        $this->load->view('pages/form-users', $data);
        $this->load->view('templates/footer', $data);
        $this->load->view('templates/js', $data);

    }
}