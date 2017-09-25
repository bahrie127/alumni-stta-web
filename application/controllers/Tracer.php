<?php

/**
 * Created by PhpStorm.
 * User: saifulbahri
 * Date: 9/20/17
 * Time: 4:18 AM
 */
class Tracer extends CI_Controller
{

    public function index(){
        $this->load->view("client/header");
        $this->load->view("client/content/tracer/login");
        $this->load->view("client/footer");
    }

    public function search(){
        $this->load->view("client/header");
        $this->load->view("client/content/tracer/search");
        $this->load->view("client/footer");
    }

    public function search_result(){
        $this->load->view("client/header");
        $this->load->view("client/content/tracer/search_result");
        $this->load->view("client/footer");
    }

    public function profil(){
        $this->load->view("client/header");
        $this->load->view("client/content/tracer/profil");
        $this->load->view("client/footer");
    }

    public function validate(){
        $this->load->view("client/header");
        $this->load->view("client/content/tracer/validate");
        $this->load->view("client/footer");
    }

    public function register(){
        $this->load->view("client/header");
        $this->load->view("client/content/tracer/register");
        $this->load->view("client/footer");
    }

    public function submit(){
        $this->load->view("client/header");
        $this->load->view("client/content/tracer/register_result");
        $this->load->view("client/footer");
    }

    public function login(){
        $this->load->view("client/header");
        $this->load->view("client/content/tracer/home/user");
        $this->load->view("client/footer");
    }

    public function kuisioner(){
        $this->load->view("client/header");
        $this->load->view("client/content/tracer/home/kuisioner");
        $this->load->view("client/footer");
    }

    public function home(){
        $this->load->view("client/header");
        $this->load->view("client/content/tracer/home/user");
        $this->load->view("client/footer");
    }

    public function teman(){
        $this->load->view("client/header");
        $this->load->view("client/content/tracer/home/teman_seangkatan");
        $this->load->view("client/footer");
    }

    public function pesan(){
        $this->load->view("client/header");
        $this->load->view("client/content/tracer/home/pesan");
        $this->load->view("client/footer");
    }

    public function logout(){
        $this->load->view("client/header");
        $this->load->view("client/content/tracer/login");
        $this->load->view("client/footer");
    }

    public function edit_profil(){
        $this->load->view("client/header");
        $this->load->view("client/content/tracer/home/edit_profil");
        $this->load->view("client/footer");
    }


}