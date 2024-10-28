<?php

class Employees extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Employees_model');
    }

    public function index()
    {

        $data['employee'] =  $this->Employees_model->rows();

        $this->load->view('templates/header');
        $this->load->view('templates/nav');
        $this->load->view('employees/index', $data);
        $this->load->view('templates/footer',);
    }

    public function add()
    {
        $this->form_validation->set_rules('lname','Last Name','trim|required');
        $this->form_validation->set_rules('fname','First Name','trim|required');
        $this->form_validation->set_rules('em_id','Employee No.','trim|required');
        $this->form_validation->set_rules('department','Department','trim|required');
        $this->form_validation->set_rules('email','Email','trim|required');
        $this->form_validation->set_rules('office_code','Employee No.','trim|required');
        $this->form_validation->set_rules('province_or_city','Live','trim|required');
        $this->form_validation->set_rules('region','Region','trim|required');
        $this->form_validation->set_rules('brgy','Baranggy','trim|required');
        $this->form_validation->set_rules('contact','Contact No.','trim|required');

        if ($this->form_validation->run()) {
            
            $data = array(
                'lname'                 =>$this->input->post('lname'),
                'fname'                 =>$this->input->post('fname'),
                'em_id'                 =>$this->input->post('em_id'),
                'department'            =>$this->input->post('department'),
                'email'                 =>$this->input->post('email'),
                'office_code'           =>$this->input->post('office_code'),
                'province_or_city'      =>$this->input->post('province_or_city'),
                'region'                =>$this->input->post('region'),
                'brgy'                  =>$this->input->post('brgy'),
                'contact'               =>$this->input->post('contact'),
                'pword'                 => hash('sha256','abc567%^&'),
                'created_by'            => 'ABC-0000-0001',
                'date_created'          => date('Y-m-d')
            );
            $result = $this->Employees_model->add($data);

            if ($result) {
                $this->session->set_flashdata('msg', 'Successfully created a User');
                redirect('Employees');
            }
            else
            {
                $this->session->set_flashdata('errmsg', 'You have failed to create a user');
                redirect('Employees/add');
            }
        }

        $this->load->view('templates/header');
        $this->load->view('templates/nav');
        $this->load->view('employees/add');
        $this->load->view('templates/footer',);
    }

    public function update($id)
    {
        $this->form_validation->set_rules('lname','Last Name','trim|required');
        $this->form_validation->set_rules('fname','First Name','trim|required');
        $this->form_validation->set_rules('em_id','Employee No.','trim|required');
        $this->form_validation->set_rules('department','Department','trim|required');
        $this->form_validation->set_rules('email','Email','trim|required');
        $this->form_validation->set_rules('office_code','Employee No.','trim|required');
        $this->form_validation->set_rules('province_or_city','Live','trim|required');
        $this->form_validation->set_rules('region','Region','trim|required');
        $this->form_validation->set_rules('brgy','Baranggy','trim|required');
        $this->form_validation->set_rules('contact','Contact No.','trim|required');

        if ($this->form_validation->run()) {
            
            $data = array(
                'lname'                 =>$this->input->post('lname'),
                'fname'                 =>$this->input->post('fname'),
                'em_id'                 =>$this->input->post('em_id'),
                'department'            =>$this->input->post('department'),
                'email'                 =>$this->input->post('email'),
                'office_code'           =>$this->input->post('office_code'),
                'province_or_city'      =>$this->input->post('province_or_city'),
                'region'                =>$this->input->post('region'),
                'brgy'                  =>$this->input->post('brgy'),
                'contact'               =>$this->input->post('contact'),
                'edited_by'             => 'ABC-0000-0001',
                'date_edited'           => date('Y-m-d')
            );
            /* var_dump($id);
            die; */

            $result = $this->Employees_model->update($id, $data);
            if ($result) {
                $this->session->set_flashdata('msg', 'You have successfully updated user details');
                redirect('Employees');
            }
            else
            {
                $this->session->set_flashdata('errmsg', 'You have failed to updated user details');
                redirect('Employees/add');
            }
        }
        $data['user'] = $this->Employees_model->row($id);

        $this->load->view('templates/header');
        $this->load->view('templates/nav');
        $this->load->view('employees/edit', $data);
        $this->load->view('templates/footer',);
    }

    public function delete($id)
    {
        $this->Employees_model->delete($id);

        $data = array(
            'deleted_by'    => 'ABC-0000-0001',
            'date_deleted'  => date('Y-m-d'),
            'is_deleted'   => 1
        );

        $result = $this->Employees_model->update($id, $data);
        if ($result) {
            $this->session->set_flashdata('msg', 'You have successfully delete user details');
            redirect('Employees');
        }
    }
}