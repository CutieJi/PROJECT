<?php

class Borrow extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('templates/borrow_header');
        $this->load->view('templates/nav');
        $this->load->view('borrow/index');
        $this->load->view('templates/footer');
    }
}