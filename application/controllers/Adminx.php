<?php
/**
 * Created by PhpStorm.
 * User: saifulbahri
 * Date: 9/24/17
 * Time: 6:12 AM
 */

class Adminx extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->auth->restrict();
        $this->load->database();
        $this->load->library('grocery_CRUD');
    }

    public function index(){
        $data2['content_view']='admin/dashboard/home';
        $data=array();
        $data['title']='Dashboard';
        $data2['data']= $data;
        $this->load->view('admin/dashboard/template',$data2);
    }

    public function dashboard(){
        $data2['content_view']='admin/dashboard/home';
        $data=array();
        $data['title']='Dashboard';
        $data2['data']= $data;
        $this->load->view('admin/dashboard/template',$data2);
    }

    public function tips(){
        $category = 'tips';
        $crud = new grocery_CRUD();

        $crud->set_table('db_content');
        $crud->set_subject('Tips');
        $crud->columns('title','author','date_created');
        $crud->fields('date_created','title','text','image_url', 'category','author');
        $crud->required_fields('title', 'text', 'image_url');
        $crud->change_field_type('category','invisible');
        $crud->change_field_type('author','invisible');
        $crud->change_field_type('date_created','invisible');
        $crud->set_field_upload('image_url','assets/uploads/files');
        $crud->display_as('title','Judul');
        $crud->display_as('text','Content');
        $crud->display_as("author", "Penulis");
        $crud->display_as("date_created", "Dibuat pada");
        $crud->display_as("image_url", "Upload Image");
        $crud->where('category', $category);
        $crud->callback_before_insert(array($this,'checking_post_tips'));
        $crud->set_language('indonesian');
        if($this->session->userdata('level')==1){
            $crud->unset_delete();
        }
        $output = $crud->render();
        $output->content_view='admin/content_view';
        $data=array();
        $data['title']='Tips';
        $output->data=$data;
        $this->load->view('/admin/dashboard/template',$output);
    }

    public function pages(){
        $category = 'pages';
        $crud = new grocery_CRUD();

        $crud->set_table('db_content');
        $crud->set_subject('Pages');
        $crud->columns('title','author','date_created');
        $crud->fields('date_created','title','text','image_url', 'category','author');
        $crud->required_fields('title', 'text', 'image_url');
        $crud->change_field_type('category','invisible');
        $crud->change_field_type('author','invisible');
        $crud->change_field_type('date_created','invisible');
        $crud->set_field_upload('image_url','assets/uploads/files');
        $crud->display_as('title','Judul');
        $crud->display_as('text','Content');
        $crud->display_as("author", "Penulis");
        $crud->display_as("date_created", "Dibuat pada");
        $crud->display_as("image_url", "Upload Image");
        $crud->where('category', $category);
        $crud->callback_before_insert(array($this,'checking_post_pages'));
        $crud->set_language('indonesian');
        if($this->session->userdata('level')==1){
            $crud->unset_delete();
        }
        $output = $crud->render();
        $output->content_view='admin/content_view';
        $data=array();
        $data['title']='Pages';
        $output->data=$data;
        $this->load->view('/admin/dashboard/template',$output);
    }

    public function slider(){
        $crud = new grocery_CRUD();

        $crud->set_table('db_slider');
        $crud->set_subject('Slider');
        $crud->required_fields('image','description');
        $crud->unset_print();
        $crud->unset_export();
        $crud->set_field_upload('image','assets/uploads/files/slider');
        $crud->display_as('image','Gambar');
        $crud->display_as('description','Keterangan');
        $crud->set_language('indonesian');
        $output = $crud->render();
        $output->content_view='admin/content_view';
        $data=array();
        $data['title']='Slider';
        $output->data=$data;
        $this->load->view('/admin/dashboard/template',$output);
    }

    public function administrator(){
        $crud = new grocery_CRUD();

        $crud->set_table('db_admin');
        $crud->set_subject('Admin');
        $crud->columns('name','username','level');
        $crud->required_fields('name','username', 'password');
        $crud->change_field_type('password', 'password');
        $crud->display_as('image','Gambar');
        $crud->display_as('description','Keterangan');
        $crud->callback_before_insert(array($this, 'checking_password'));
        $crud->callback_before_update(array($this, 'checking_password'));
        $crud->set_language('indonesian');
        if($this->session->userdata('level')==1){
            $crud->unset_delete();
            $crud->unset_add();
            $crud->unset_edit();
        }
        $output = $crud->render();
        $output->content_view='admin/content_view';
        $data=array();
        $data['title']='Administrator';
        $output->data=$data;
        $this->load->view('/admin/dashboard/template',$output);
    }

    public function lowongan(){
        $category = 'lowongan';
        $crud = new grocery_CRUD();

        $crud->set_table('db_content');
        $crud->set_subject('Lowongan');
        $crud->columns('title','author','date_created');
        $crud->fields('date_created','title','text','image_url', 'category','author');
        $crud->required_fields('title', 'text', 'image_url');
        $crud->change_field_type('category','invisible');
        $crud->change_field_type('author','invisible');
        $crud->change_field_type('date_created','invisible');
        $crud->set_field_upload('image_url','assets/uploads/files');
        $crud->display_as('title','Judul');
        $crud->display_as('text','Content');
        $crud->display_as("author", "Penulis");
        $crud->display_as("date_created", "Dibuat pada");
        $crud->display_as("image_url", "Upload Image");
        $crud->where('category', $category);
        $crud->callback_before_insert(array($this,'checking_post_lowongan'));
        $crud->set_language('indonesian');
        if($this->session->userdata('level')==1){
            $crud->unset_delete();
        }
        $output = $crud->render();
        $output->content_view='admin/content_view';
        $data=array();
        $data['title']='Lowongan';
        $output->data=$data;
        $this->load->view('/admin/dashboard/template',$output);
    }

    public function agenda(){
        $category = 'agenda';
        $crud = new grocery_CRUD();

        $crud->set_table('db_content');
        $crud->set_subject('Agenda');
        $crud->columns('title','author','date_created');
        $crud->fields('date_created','title','text','image_url', 'category','author');
        $crud->required_fields('title', 'text', 'image_url');
        $crud->change_field_type('category','invisible');
        $crud->change_field_type('author','invisible');
        $crud->change_field_type('date_created','invisible');
        $crud->set_field_upload('image_url','assets/uploads/files');
        $crud->display_as('title','Judul');
        $crud->display_as('text','Content');
        $crud->display_as("author", "Penulis");
        $crud->display_as("date_created", "Dibuat pada");
        $crud->display_as("image_url", "Upload Image");
        $crud->where('category', $category);
        $crud->callback_before_insert(array($this,'checking_post_agenda'));
        $crud->set_language('indonesian');
        if($this->session->userdata('level')==1){
            $crud->unset_delete();
        }
        $output = $crud->render();
        $output->content_view='admin/content_view';
        $data=array();
        $data['title']='Agenda';
        $output->data=$data;
        $this->load->view('/admin/dashboard/template',$output);
    }

    public function news(){
        $category = 'news';
        $crud = new grocery_CRUD();

        $crud->set_table('db_content');
        $crud->set_subject('Berita');
        $crud->columns('title','author','date_created');
        $crud->fields('date_created','title','text','image_url', 'category','author');
        $crud->required_fields('title', 'text', 'image_url');
        $crud->change_field_type('category','invisible');
        $crud->change_field_type('author','invisible');
        $crud->change_field_type('date_created','invisible');
        $crud->set_field_upload('image_url','assets/uploads/files');
        $crud->display_as('title','Judul');
        $crud->display_as('text','Content');
        $crud->display_as("author", "Penulis");
        $crud->display_as("date_created", "Dibuat pada");
        $crud->display_as("image_url", "Upload Image");
        $crud->where('category', $category);
        $crud->callback_before_insert(array($this,'checking_post_news'));
        $crud->set_language('indonesian');
        if($this->session->userdata('level')==1){
            $crud->unset_delete();
        }
        $output = $crud->render();
        $output->content_view='admin/content_view';
        $data=array();
        $data['title']='News';
        $output->data=$data;
        $this->load->view('/admin/dashboard/template',$output);
    }

    public function profil_alumni(){
        $category = 'profil_alumni';
        $crud = new grocery_CRUD();

        $crud->set_table('db_content');
        $crud->set_subject('Profil');
        $crud->columns('title','author','date_created');
        $crud->fields('date_created','title','text','image_url', 'category','author');
        $crud->required_fields('title', 'text', 'image_url');
        $crud->change_field_type('category','invisible');
        $crud->change_field_type('author','invisible');
        $crud->change_field_type('date_created','invisible');
        $crud->set_field_upload('image_url','assets/uploads/files');
        $crud->display_as('title','Judul');
        $crud->display_as('text','Content');
        $crud->display_as("author", "Penulis");
        $crud->display_as("date_created", "Dibuat pada");
        $crud->display_as("image_url", "Upload Image");
        $crud->where('category', $category);
        $crud->callback_before_insert(array($this,'checking_post_profil_alumni'));
        $crud->set_language('indonesian');
        if($this->session->userdata('level')==1){
            $crud->unset_delete();
        }
        $output = $crud->render();
        $output->content_view='admin/content_view';
        $data=array();
        $data['title']='Profil Alumni';
        $output->data=$data;
        $this->load->view('/admin/dashboard/template',$output);
    }

    function checking_post_tips($post_array)
    {
        $post_array['category'] = 'tips';
        $post_array['author'] = $this->session->userdata('name');
        return $post_array;
    }

    function checking_post_pages($post_array)
    {
        $post_array['category'] = 'pages';
        $post_array['author'] = $this->session->userdata('name');
        return $post_array;
    }

    function checking_post_lowongan($post_array)
    {
        $post_array['category'] = 'lowongan';
        $post_array['author'] = $this->session->userdata('name');
        return $post_array;
    }

    function checking_post_agenda($post_array)
    {
        $post_array['category'] = 'agenda';
        $post_array['author'] = $this->session->userdata('name');
        return $post_array;
    }

    function checking_post_news($post_array)
    {
        $post_array['category'] = 'news';
        $post_array['author'] = $this->session->userdata('name');
        return $post_array;
    }

    function checking_post_profil_alumni($post_array)
    {
        $post_array['category'] = 'profil_alumni';
        $post_array['author'] = $this->session->userdata('name');
        return $post_array;
    }

    function checking_password($post_array)
    {
        $post_array['password'] = md5($post_array['password']);
        return $post_array;
    }
}