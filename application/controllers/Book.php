<?php

class Book extends CI_Controller{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Book_model');
        
        if (!$this->session->userdata('username')) {
            redirect('login');
        }
    }

    public function index()
    {
        $data['title'] = "Home";
        $data['books'] = $this->Book_model->getAllData();

        $this->load->view('templates/header', $data);
        $this->load->view('partials/navbar');
        $this->load->view('books/index', $data);
        $this->load->view('templates/footer');
    }

    public function detail($id = null)
    {
        if($id == null){
            show_404();
        }
        $data['title'] = "Book";
        $data['book'] = $this->Book_model->getDataById($id);

        $this->load->view('templates/header', $data);
        $this->load->view('partials/navbar');
        $this->load->view('books/book', $data);
        $this->load->view('templates/footer');
    }

    public function create()
    {
        $this->form_validation->set_rules('title','Title', 'required');
        $this->form_validation->set_rules('author','Author', 'required');

        if($this->form_validation->run() == false){
            $data['title'] = "Book";

            $this->load->view('templates/header', $data);
            $this->load->view('partials/navbar');
            $this->load->view('books/create');
            $this->load->view('templates/footer');
        }else{
            $this->Book_model->insertData($this->input->post());

            redirect(base_url()."book");

        }
    }

    public function edit($id = null)
    {
        if($id == null){
            show_404();
        }

        $this->form_validation->set_rules('title','Title', 'required');
        $this->form_validation->set_rules('author','Author', 'required');

        if($this->form_validation->run() == false){
            $data['title'] = "Book edit";
            $data['book'] = $this->Book_model->getDataById($id);

            $this->load->view('templates/header', $data);
            $this->load->view('partials/navbar');
            $this->load->view('books/edit', $data);
            $this->load->view('templates/footer');
        }else{
            if(!$this->Book_model->updateData($this->input->post())){
                show_error("Database Error");
            }
            redirect(base_url()."book");
        }
    }

    public function destroy($id = null)
    {
        if($id == null){
            show_404();
        }

        if(!$this->Book_model->deleteData($id)){
            show_error("Database error");
        }

        redirect(base_url()."book");
    }
}
