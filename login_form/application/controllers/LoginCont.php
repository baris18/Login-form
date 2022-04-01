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
    
    /* public function listele()
    {
        $items = $this->FormApp_Model->get_all();
        $viewData = array(
            "items" => $items
        );
        $this->load->view("listele", $viewData);
    } */
    
    //echo "Form Kayıt İşlemi"
    public function insert()
    {
        $data = array(
            "name"      => $this->input->post("name"),
            "email"     => $this->input->post("email"),
            "service"   => $this->input->post("service"),
            "budget"    => $this->input->post("budget"),
            "message"   => $this->input->post("message")
        );

        $insert = $this->LoginCont_Model->insert($data);

        if ($insert) {
            redirect("logincont/listele");
        } else {
            redirect("logincont");
        }
        
    }







}














?>