<?php
    class SaveData extends CI_Controller{
        public function __construct(){
            parent:: __construct();
           // $this->load->helper('form');
           // $this->load->helper('url');
        }

        public function index(){
            $this->load->view('student');
        }

        public function save_data(){
            $name = $this->input->post('txtName');
            $phone = $this->input->post('txtPhone');
            $email = $this->input->post('txtEmail');

            echo "$name" . "<br>";
            echo "$phone" . "<br>";
            echo "$email" . "<br>";
        }
    }

?>