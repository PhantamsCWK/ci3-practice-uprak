<?php

class Home extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }
    
    public function index()
    {
        $data['title'] = "Home";

        $this->load->view('templates/header', $data);
        $this->load->view('partials/navbar');
        $this->load->view('home');
        $this->load->view('templates/footer');
    }
}
