<?php

class auth extends CI_Controller
{
    // public function __construct()
    // {
        
    // }

    public function login()
    {
        $this->form_validation->set_rules('username','username','required|trim');
        $this->form_validation->set_rules('password','Password','required');
        
        if($this->form_validation->run() == FALSE){
            $data['title'] = 'Login';

            $this->load->view('templates/header', $data);
            $this->load->view('login');
            $this->load->view('templates/footer');
        }else{
            $this->_login();
        }
    }

    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('users', ['username' => $username])->row_array();
        if($user){
            if(password_verify($password,$user['password'])){
                $this->session->set_userdata([
                    'username'=> $user['username'],
                ]);
                redirect(base_url('book'));
            }
        }
        $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
        username or password wrong
      </div>');
        redirect(base_url('auth/login'));

    }

    public function register()
    {
        $this->form_validation->set_rules('username','username','required|trim|is_unique[users.username]');
        // $this->form_validation->set_rules('email','Email','required|trim|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('password','Password','required|min_length[3]|matches[password2]');
        $this->form_validation->set_rules('password2','Password2','required|matches[password]');
        
        if($this->form_validation->run() == FALSE){
            $data['title'] = 'Register';

            $this->load->view('templates/header', $data);
            $this->load->view('register');
            $this->load->view('templates/footer');
        }else{
            $data = [
                'username' => $this->input->post('username'),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            ];

            $this->db->insert('users',$data);

            redirect(base_url('login'));
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
        Logout successfully
      </div>');

      redirect('login');
    }
}
