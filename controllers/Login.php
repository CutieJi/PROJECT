<?php

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model');
    }

    public function index()
    {
        $this->load->view('login/index');
        $this->load->view('templates/footer');
    }

    public function login()
    {
        $this->form_validation->set_rules('users_id','Users ID','trim|required');
        $this->form_validation->set_rules('pword','Password.','trim|required');

        if ($this->form_validation->run()) {
            
            $data = array(
                'users_id'      => $this->input->post('users_id'),
                'pword'         => hash('sha256', $this->input->post('pword')),
                'is_deleted'    => 0
            );
            $result = $this->Login_model->login($data);

            if ($result) {
                $this->session->set_userdata('usr_info', $result);
                redirect('dashboard');
            }
            else
            {
                // $this->session->set_flashdata('errmsg', 'You have failed to create a user');
                //redirect('Login/login');
            }
        }
        
        $this->load->view('login/index');
        $this->load->view('templates/footer');
    }

    public function update($id)
    {
       
    }

    public function logout()
    {
       $this->session->sess_destroy();
       redirect('login/login');
    }
}