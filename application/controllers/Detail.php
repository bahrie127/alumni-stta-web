<?php

/**
 * Created by PhpStorm.
 * User: saifulbahri
 * Date: 9/14/17
 * Time: 3:34 AM
 */
class Detail extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('model_content');
    }

    public function read($category,$title_url){
        $data['detail'] = $this->model_content->get_content_detail($title_url)->row();
        $data['tips'] = $this->model_content->get_content_home('tips')->result();
        $data['lowongan'] = $this->model_content->get_content_home('lowongan')->result();
        $data['agenda'] = $this->model_content->get_content_home('agenda')->result();
        $data['news'] = $this->model_content->get_news_home('news')->result();
        $data['title'] = $data['detail']->title;
        $this->load->view("client/header", $data);
        if($category=='tips' || $category=='news' || $category=='profil_alumni')
        $this->load->view("client/content/tips_news_detail", $data);
        if($category=='agenda')
            $this->load->view("client/content/agenda_detail", $data);
        if($category=='lowongan')
            $this->load->view("client/content/lowongan_detail", $data);
        if($category=='pages')
            $this->load->view("client/content/page_detail", $data);
        $this->load->view("client/footer");
    }

    public function index(){
        $this->load->view("client/header");
        $this->load->view("client/content/tips_news_detail");
        $this->load->view("client/footer");
    }
//
//
//    public function news(){
//        $this->load->view("client/header");
//        $this->load->view("client/content/tips_news_detail");
//        $this->load->view("client/footer");
//    }
//
//    public function lowongan(){
//        $this->load->view("client/header");
//        $this->load->view("client/content/lowongan_detail");
//        $this->load->view("client/footer");
//    }
//
//    public function agenda(){
//        $this->load->view("client/header");
//        $this->load->view("client/content/agenda_detail");
//        $this->load->view("client/footer");
//    }

}