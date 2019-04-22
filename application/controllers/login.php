<?php

class login extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('m_login');
    }

    function index(){
        $this->load->view('login');
    }

    function action_login(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');

            
    }

    
}

?>