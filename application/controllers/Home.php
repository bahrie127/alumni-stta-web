<?php

/**
 * Created by PhpStorm.
 * User: saifulbahri
 * Date: 9/13/17
 * Time: 6:01 AM
 */
class Home extends CI_Controller
{

    public function index(){
        $this->load->view("client/header");
        $this->load->view("client/content/slider_gallery");
        $this->load->view("client/content/lowongan");
        $this->load->view("client/content/news");
        $this->load->view("client/content/profil_alumni");
        $this->load->view("client/footer_home");
    }

}