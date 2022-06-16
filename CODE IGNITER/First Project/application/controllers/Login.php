<?php
class Login extends CI_Controller{
    public function index(){
        $data['title']="Authantication Page";
        $data['heading']="Sign in";
        $this->load->view("login",$data);
    }
}
?>