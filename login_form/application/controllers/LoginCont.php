<?php

class LoginCont extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("LoginCont_Model");
    }


    public function index()
    {
        $this->load->view("login");
    }

    








}














?>