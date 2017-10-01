<?php

/**
 * Created by PhpStorm.
 * User: saifulbahri
 * Date: 9/13/17
 * Time: 6:01 AM
 */
class Home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('model_content');
    }

    public function index(){
        $data['sliders'] = $this->model_content->get_slider()->result();
        $data['tips'] = $this->model_content->get_content_home('tips')->result();
        $data['lowongan'] = $this->model_content->get_content_home('lowongan')->result();
        $data['agenda'] = $this->model_content->get_content_home('agenda')->result();
        $data['news'] = $this->model_content->get_news_home('news')->result();
        $data['profil_alumni'] = $this->model_content->get_content_home('profil_alumni')->result();
        $data['title'] = "Alumni - Sekolah Tinggi Teknologi Adisutjipto";
        $this->load->view("client/header", $data);
        $this->load->view("client/content/slider_gallery");
        $this->load->view("client/content/lowongan");
        $this->load->view("client/content/news");
        $this->load->view("client/content/profil_alumni");
        $this->load->view("client/footer_home");
    }

    public function all($category, $limit=8, $asset=0){
        $data['list'] = $this->model_content->get_list($category, $limit, $asset)->result();
        $data['isMore'] = ($this->model_content->get_list_count($category)-$limit) > 0;
        $data['isNext'] = ($this->model_content->get_list_count($category)-($limit+$asset)) > 0;
        $data['isPrev'] = $limit<=$asset;
        $data['nextLimit'] = $asset+$limit;
        $data['prevLimit'] = $asset-$limit;
        $data['category'] = $category;
        $data['tips'] = $this->model_content->get_content_home('tips')->result();
        $data['lowongan'] = $this->model_content->get_content_home('lowongan')->result();
        $data['agenda'] = $this->model_content->get_content_home('agenda')->result();
        $data['news'] = $this->model_content->get_news_home('news')->result();
        $data['title'] = $category;
        $this->load->view("client/header", $data);
        $this->load->view("client/content/list_article");
        $this->load->view("client/footer");
    }

}