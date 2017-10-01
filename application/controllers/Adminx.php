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
        $crud->columns('title','image_url','author','date_created');
        $crud->fields('date_created','title','text','image_url', 'category','author', 'title_url');
        $crud->required_fields('title', 'text', 'image_url');
        $crud->change_field_type('category','invisible');
        $crud->change_field_type('author','invisible');
        $crud->change_field_type('date_created','invisible');
        $crud->change_field_type('title_url','invisible');
        $crud->set_field_upload('image_url','assets/uploads/files');
        $crud->display_as('title','Judul');
        $crud->display_as('text','Content');
        $crud->display_as("author", "Penulis");
        $crud->display_as("date_created", "Dibuat pada");
        $crud->display_as("image_url", "Gambar");
        $crud->where('category', $category);
        $crud->callback_before_insert(array($this,'checking_post_tips'));
        $crud->callback_before_update(array($this,'checking_post_tips'));
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
        $crud->columns('title','image_url','author','date_created');
        $crud->fields('date_created','title','text','image_url', 'category','author', 'title_url');
        $crud->required_fields('title', 'text', 'image_url');
        $crud->change_field_type('category','invisible');
        $crud->change_field_type('author','invisible');
        $crud->change_field_type('date_created','invisible');
        $crud->change_field_type('title_url','invisible');
        $crud->set_field_upload('image_url','assets/uploads/files');
        $crud->display_as('title','Judul');
        $crud->display_as('text','Content');
        $crud->display_as("author", "Penulis");
        $crud->display_as("date_created", "Dibuat pada");
        $crud->display_as("image_url", "Gambar");
        $crud->where('category', $category);
        $crud->callback_before_insert(array($this,'checking_post_pages'));
        $crud->callback_before_update(array($this,'checking_post_pages'));
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
        $crud->columns('title','image_url','author','date_created');
        $crud->fields('date_created','title','text','image_url', 'category','author', 'title_url');
        $crud->required_fields('title', 'text', 'image_url');
        $crud->change_field_type('category','invisible');
        $crud->change_field_type('author','invisible');
        $crud->change_field_type('date_created','invisible');
        $crud->change_field_type('title_url','invisible');
        $crud->set_field_upload('image_url','assets/uploads/files');
        $crud->display_as('title','Judul');
        $crud->display_as('text','Content');
        $crud->display_as("author", "Penulis");
        $crud->display_as("date_created", "Dibuat pada");
        $crud->display_as("image_url", "Gambar");
        $crud->where('category', $category);
        $crud->callback_before_insert(array($this,'checking_post_lowongan'));
        $crud->callback_before_update(array($this,'checking_post_lowongan'));
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
        $crud->columns('title','image_url','author','date_created');
        $crud->fields('date_created','title','text','image_url', 'category','author', 'title_url');
        $crud->required_fields('title', 'text', 'image_url');
        $crud->change_field_type('category','invisible');
        $crud->change_field_type('author','invisible');
        $crud->change_field_type('date_created','invisible');
        $crud->change_field_type('title_url','invisible');
        $crud->set_field_upload('image_url','assets/uploads/files');
        $crud->display_as('title','Judul');
        $crud->display_as('text','Content');
        $crud->display_as("author", "Penulis");
        $crud->display_as("date_created", "Dibuat pada");
        $crud->display_as("image_url", "Gambar");
        $crud->where('category', $category);
        $crud->callback_before_insert(array($this,'checking_post_agenda'));
        $crud->callback_before_update(array($this,'checking_post_agenda'));
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
        $crud->columns('title','image_url','author','date_created');
        $crud->fields('date_created','title','text','image_url', 'category','author', 'title_url');
        $crud->required_fields('title', 'text', 'image_url');
        $crud->change_field_type('category','invisible');
        $crud->change_field_type('author','invisible');
        $crud->change_field_type('date_created','invisible');
        $crud->change_field_type('title_url','invisible');
        $crud->set_field_upload('image_url','assets/uploads/files');
        $crud->display_as('title','Judul');
        $crud->display_as('text','Content');
        $crud->display_as("author", "Penulis");
        $crud->display_as("date_created", "Dibuat pada");
        $crud->display_as("image_url", "Gambar");
        $crud->where('category', $category);
        $crud->callback_before_insert(array($this,'checking_post_news'));
        $crud->callback_before_update(array($this,'checking_post_news'));
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
        $crud->columns('title','image_url','author','date_created');
        $crud->fields('date_created','title','text','image_url', 'category','author', 'title_url');
        $crud->required_fields('title', 'text', 'image_url');
        $crud->change_field_type('category','invisible');
        $crud->change_field_type('author','invisible');
        $crud->change_field_type('date_created','invisible');
        $crud->change_field_type('title_url','invisible');
        $crud->set_field_upload('image_url','assets/uploads/files');
        $crud->display_as('title','Judul');
        $crud->display_as('text','Content');
        $crud->display_as("author", "Penulis");
        $crud->display_as("date_created", "Dibuat pada");
        $crud->display_as("image_url", "Gambar");
        $crud->where('category', $category);
        $crud->callback_before_insert(array($this,'checking_post_profil_alumni'));
        $crud->callback_before_update(array($this,'checking_post_profil_alumni'));
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

    public function data_alumni(){
        $crud = new grocery_CRUD();

        $crud->set_table('db_alumni');
        $crud->set_subject('Alumni');
        $crud->columns('nim', 'nama', 'nm_prodi', 'kd_ta_lulus');
        $crud->fields('nim','nama', 'kd_alumni', 'kd_ta_lulus', 'ta', 'kd_smt', 'tahun', 'tgl_lulus', 'kd_prodi', 'nm_prodi', 'kd_fak',
            'nm_fax','kd_pt', 'nm_pt','no_test','judul_ta');
        $crud->display_as('nim', 'NIM');
        $crud->display_as('nama', 'Nama');
        $crud->display_as('nm_prodi', 'Jurusan');
        $crud->display_as('kd_ta_lulus', 'Lulus Tahun');
        $crud->change_field_type('is_register','invisible');
        $crud->unset_read();
        $output = $crud->render();
        $output->content_view='admin/content_view';
        $data=array();
        $data['title']='Data Alumni';
        $output->data=$data;
        $this->load->view('/admin/dashboard/template',$output);
    }

    public function data_mahasiswa(){
        $crud = new grocery_CRUD();

        $crud->set_table('db_mhs');
        $crud->set_subject('Mahasiswa');
        $crud->columns('nim', 'nama', 'tgl_lahir', 'email');
        $crud->fields('nim','nama', 'tmp_lahir', 'tgl_lahir', 'foto', 'kewarganegaraan', 'agama',
            'instansi','jabatan','kesesuaian',
            'alamatp','negara', 'provinsi', 'kabupaten',
            'kodepos', 'notlp', 'alamats', 'provinsi1', 'kabupaten1', 'kode_post',
            'tlp1', 'hp', 'email', 'ttgsaya');
        $crud->display_as('nim', 'NIM');
        $crud->display_as('nama', 'Nama');
        $crud->display_as('tgl_lahir', 'Tanggal Lahir');
        $crud->display_as('jk', 'Jenis Kelamin');
        $crud->display_as('alamatp', 'Alamat Kantor');
        $crud->display_as('alamats', 'Alamat Sekarang');
        $crud->display_as('email', 'Email');
        $crud->display_as('tmp_lahir', 'Tempat Lahir');
        $crud->display_as('ttgsaya', 'Tentang Saya');
        $crud->display_as('provinsi1', 'Provinsi');
        $crud->display_as('kabupaten1', 'Kabupaten');
        $crud->display_as('tlp1', 'No Telepon');
        $crud->display_as('hp', 'No HP');
        $crud->display_as('notlp', 'No Telepon');
        $crud->display_as('kode_post', 'Kode pos');
        $crud->display_as('instansi', 'Instansi / Tempat Kerja');
        $crud->set_field_upload('foto','assets/uploads/files/foto');
        $crud->unset_read();
        $output = $crud->render();
        $output->content_view='admin/content_view';
        $data=array();
        $data['title']='Data Mahasiswa';
        $output->data=$data;
        $this->load->view('/admin/dashboard/template',$output);
    }

    function checking_post_tips($post_array)
    {
        $post_array['category'] = 'tips';
        $post_array['author'] = $this->session->userdata('name');
        $post_array['title_url'] = $this->titleUrl($post_array['title']);
        return $post_array;
    }

    function checking_post_pages($post_array)
    {
        $post_array['category'] = 'pages';
        $post_array['author'] = $this->session->userdata('name');
        $post_array['title_url'] = $this->titleUrl($post_array['title']);
        return $post_array;
    }

    function checking_post_lowongan($post_array)
    {
        $post_array['category'] = 'lowongan';
        $post_array['author'] = $this->session->userdata('name');
        $post_array['title_url'] = $this->titleUrl($post_array['title']);
        return $post_array;
    }

    function checking_post_agenda($post_array)
    {
        $post_array['category'] = 'agenda';
        $post_array['author'] = $this->session->userdata('name');
        $post_array['title_url'] = $this->titleUrl($post_array['title']);
        return $post_array;
    }

    function checking_post_news($post_array)
    {
        $post_array['category'] = 'news';
        $post_array['author'] = $this->session->userdata('name');
        $post_array['title_url'] = $this->titleUrl($post_array['title']);
        return $post_array;
    }

    function checking_post_profil_alumni($post_array)
    {
        $post_array['category'] = 'profil_alumni';
        $post_array['author'] = $this->session->userdata('name');
        $post_array['title_url'] = $this->titleUrl($post_array['title']);
        return $post_array;
    }

    function checking_password($post_array)
    {
        $post_array['password'] = md5($post_array['password']);
        return $post_array;
    }

    function titleUrl($text) {

        $stripped = preg_replace(array('/\s{2,}/', '/[\t\n]/'), '-', $text);
        $stripped= strtolower($stripped);
        $stripped = str_replace(array('\\', '/',' '), '-', $stripped);
        $stripped= preg_replace('/[^A-Za-z0-9\-]/', '', $stripped);
        return $stripped;
    }
}