<?php

/**
 * Created by PhpStorm.
 * User: saifulbahri
 * Date: 9/14/17
 * Time: 3:34 AM
 */
class Detail extends CI_Controller
{
    public function index(){
        $this->load->view("client/header");
        $this->load->view("client/content/tips_news_detail");
        $this->load->view("client/footer");
    }

    public function tips(){
        $this->load->view("client/header");
        $this->load->view("client/content/tips_news_detail");
        $this->load->view("client/footer");
    }

    public function news(){
        $this->load->view("client/header");
        $this->load->view("client/content/tips_news_detail");
        $this->load->view("client/footer");
    }

    public function lowongan(){
        $this->load->view("client/header");
        $this->load->view("client/content/lowongan_detail");
        $this->load->view("client/footer");
    }

    public function agenda(){
        $this->load->view("client/header");
        $this->load->view("client/content/agenda_detail");
        $this->load->view("client/footer");
    }

    public function page(){
        $this->load->view("client/header");
        $this->load->view("client/content/single_page");
        $this->load->view("client/footer");
    }
}