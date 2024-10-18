<?php

class Grant_access extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Grant_access_model');
    }

    public function index()
    {

        $data['users'] =  $this->Grant_access_model->rows();

        $this->load->view('templates/header');
        $this->load->view('templates/nav');
        $this->load->view('grant_access/index', $data);
        $this->load->view('templates/footer',);
    }

    public function add()
    {
        $this->form_validation->set_rules('users_id','Employee No.','trim|required');
        $this->form_validation->set_rules('department','Department.','trim|required');

        if ($this->form_validation->run()) {
            
            $data = array(
                'users_id'      =>$this->input->post('users_id'),
                'pword'         => hash('sha256','abc567%^&'),
                'department'    => $this->input->post('department'),
                'created_by'    => 'ABC-0000-0001',
                'date_created'  => date('Y-m-d')
            );
            $result = $this->Grant_access_model->add($data);

            if ($result) {
                $this->session->set_flashdata('msg', 'Successfully created a User');
                redirect('Grant_access');
            }
            else
            {
                $this->session->set_flashdata('errmsg', 'You have failed to create a user');
                redirect('Grant_access/add');
            }
        }

        $this->load->view('templates/header');
        $this->load->view('templates/nav');
        $this->load->view('grant_access/add');
        $this->load->view('templates/footer',);
    }

    public function update($id)
    {
        $this->form_validation->set_rules('users_id','Employee No.','trim|required');
        $this->form_validation->set_rules('department','Department.','trim|required');

        if ($this->form_validation->run()) {
            
            $data = array(
                'users_id'      =>$this->input->post('users_id'),
                'department'    => $this->input->post('department'),
                'edited_by'    => 'ABC-0000-0001',
                'date_edited'  => date('Y-m-d')
            );
            /* var_dump($id);
            die; */

            $result = $this->Grant_access_model->update($id, $data);
            if ($result) {
                $this->session->set_flashdata('msg', 'You have successfully updated user details');
                redirect('Grant_access');
            }
            else
            {
                $this->session->set_flashdata('errmsg', 'You have failed to updated user details');
                redirect('Grant_access/add');
            }
        }
        $data['user'] = $this->Grant_access_model->row($id);

        $this->load->view('templates/header');
        $this->load->view('templates/nav');
        $this->load->view('grant_access/edit', $data);
        $this->load->view('templates/footer',);
    }

    public function delete($id)
    {
        $this->Grant_access_model->delete($id);

        $data = array(
            'deleted_by'    => 'ABC-0000-0001',
            'date_deleted'  => date('Y-m-d'),
            'is_deleted'   => 1
        );

        $result = $this->Grant_access_model->update($id, $data);
        if ($result) {
            $this->session->set_flashdata('msg', 'You have successfully delete user details');
            redirect('Grant_access');
        }
    }
}