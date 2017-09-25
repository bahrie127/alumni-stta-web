<?php
/**
 * Created by PhpStorm.
 * User: saifulbahri
 * Date: 9/24/17
 * Time: 6:12 AM
 */

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
        $data['error']="";
        $this->load->view("admin/header_login");
        $this->load->view("admin/login", $data);
    }

    function login_in(){
        if($this->auth->do_login($this->input->POST('username'),$this->input->POST('password'))){
            redirect('adminx/dashboard');
        }else{
            $data['error']="username dan password salah";
            $this->load->view("admin/header_login");
            $this->load->view("admin/login", $data);
        }

    }

    function logout(){
        $this->session->sess_destroy();
        redirect('adm/login');
    }

}