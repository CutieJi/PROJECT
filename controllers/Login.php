<?php

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {

        $this->load->view('login/index');
    }

    public function signin()
    {
        {
            $data = array(
                'users_id'      =>$this->input->post('users_id'),
                'pword'         =>$this->input->post('password')
            );
            $result = $this->Login_model->signin($data);

            if ($result) {
                $this->session->set_flashdata('msg', 'The password you ve entered is incorrect');
            }
            else
            {
                $this->session->set_flashdata('errmsg', 'The password you ve entered is incorrect');
            }
        }

        $this->load->view('login/index');
    }
}