<?php
class Student extends CI_Controller{
    public function index(){
        $data['title']="Dashboard";
        $this->load->view("student_dashboard",$data);
    }
    public function list(){
        $data['title']="List of Students";
        $data['heading']="List of Students";
        $data['students']=$this->db->get('students');
        $this->load->view("list_students",$data);
    }

}
?>