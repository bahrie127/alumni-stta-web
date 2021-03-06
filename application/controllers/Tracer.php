<?php

/**
 * Created by PhpStorm.
 * User: saifulbahri
 * Date: 9/20/17
 * Time: 4:18 AM
 */
class Tracer extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('model_content');
        $this->load->model('model_tracer');
        $this->load->database();
        $this->load->library('grocery_CRUD');
        $this->load->helper(array('form', 'url'));
    }

    public function index(){
        if($this->session->userdata('nim') != ''){
            redirect('tracer/home');
        }else{
            $data['error_login']="";
            $data['tips'] = $this->model_content->get_content_home('tips')->result();
            $data['lowongan'] = $this->model_content->get_content_home('lowongan')->result();
            $data['agenda'] = $this->model_content->get_content_home('agenda')->result();
            $data['news'] = $this->model_content->get_news_home('news')->result();
            $data['title'] = 'Tracer Study';
            $this->load->view("client/header", $data);
            $this->load->view("client/content/tracer/login");
            $this->load->view("client/footer");
        }
    }

    public function search(){
        $data['tips'] = $this->model_content->get_content_home('tips')->result();
        $data['lowongan'] = $this->model_content->get_content_home('lowongan')->result();
        $data['agenda'] = $this->model_content->get_content_home('agenda')->result();
        $data['news'] = $this->model_content->get_news_home('news')->result();
        $data['title'] = 'Tracer Study - Search';
        $this->load->view("client/header", $data);
        $this->load->view("client/content/tracer/search");
        $this->load->view("client/footer");
    }

    public function search_result(){
        $nama = $this->input->POST('nama');
        $jurusan = $this->input->POST('jurusan');
        $angkatan = $this->input->POST('angkatan');
        $data['alumni']= $this->model_tracer->search_alumni($nama, $jurusan, $angkatan)->result();
        $data['is_found'] = $this->model_tracer->search_alumni($nama, $jurusan, $angkatan)->num_rows() > 0;
        $data['tips'] = $this->model_content->get_content_home('tips')->result();
        $data['lowongan'] = $this->model_content->get_content_home('lowongan')->result();
        $data['agenda'] = $this->model_content->get_content_home('agenda')->result();
        $data['news'] = $this->model_content->get_news_home('news')->result();
        $data['title'] = 'Tracer Study - Result';
        $this->load->view("client/header", $data);
        $this->load->view("client/content/tracer/search_result");
        $this->load->view("client/footer");
    }

    public function profil($nim){
        $data['tips'] = $this->model_content->get_content_home('tips')->result();
        $data['lowongan'] = $this->model_content->get_content_home('lowongan')->result();
        $data['agenda'] = $this->model_content->get_content_home('agenda')->result();
        $data['news'] = $this->model_content->get_news_home('news')->result();
        $data['mhs']= $this->model_tracer->get_data_alumni($nim)->row();
        $data['mhs2']= $this->model_tracer->get_data_mahasiswa($nim)->row();
        $data['is_found'] = $this->model_tracer->get_data_alumni($nim)->num_rows();
        $data['title'] = 'Tracer Study - Profil';
        $this->load->view("client/header", $data);
        $this->load->view("client/content/tracer/profil");
        $this->load->view("client/footer");
    }

    public function validate($nim){
        $valid = $data['mhs']= $this->model_tracer->get_data_alumni($nim)->num_rows()>0;
        $data['valid'] = $valid;
        $data['tgl_valid'] = true;
        $data['mhs']= $this->model_tracer->get_data_alumni($nim)->row();
        $data['tips'] = $this->model_content->get_content_home('tips')->result();
        $data['lowongan'] = $this->model_content->get_content_home('lowongan')->result();
        $data['agenda'] = $this->model_content->get_content_home('agenda')->result();
        $data['news'] = $this->model_content->get_news_home('news')->result();
        $data['title'] = 'Tracer Study - Validate';
        $this->load->view("client/header", $data);
        $this->load->view("client/content/tracer/validate");
        $this->load->view("client/footer");
    }

    public function register(){
        $nim = $this->input->POST('nim');
        $tgl_lahir = $this->input->POST('tgl_lahir');
        $valid = $this->model_tracer->get_data_mahasiswa_by_nim_tgl_lahir($nim, $tgl_lahir)->num_rows() > 0;
        $data['tgl_valid'] = $valid;
        $data['valid'] = true;
        $data['mhs']= $this->model_tracer->get_data_alumni($nim)->row();
        $data['mhs2']= $this->model_tracer->get_data_mahasiswa($nim)->row();
        $data['tips'] = $this->model_content->get_content_home('tips')->result();
        $data['lowongan'] = $this->model_content->get_content_home('lowongan')->result();
        $data['agenda'] = $this->model_content->get_content_home('agenda')->result();
        $data['news'] = $this->model_content->get_news_home('news')->result();
        if($valid){
            $data['error_reg'] = '';
            $data['title'] = 'Tracer Study - Register';
            $this->load->view("client/header", $data);
            $this->load->view("client/content/tracer/register");
            $this->load->view("client/footer");
        }else{
//            $strUrl ='tracer/validate/'.$nim;
//            redirect($strUrl);
            $data['title'] = 'Tracer Study - Validate';
            $this->load->view("client/header", $data);
            $this->load->view("client/content/tracer/validate");
            $this->load->view("client/footer");
        }

    }

    public function submit(){
        $nim = $this->input->POST('nim');
        $username = $this->input->POST('username');
        $password = $this->input->POST('password');
        $email = $this->input->POST('email');
        $data['mhs']= $this->model_tracer->get_data_alumni($nim)->row();
        $data['mhs2']= $this->model_tracer->get_data_mahasiswa($nim)->row();
        $data['tips'] = $this->model_content->get_content_home('tips')->result();
        $data['lowongan'] = $this->model_content->get_content_home('lowongan')->result();
        $data['agenda'] = $this->model_content->get_content_home('agenda')->result();
        $data['news'] = $this->model_content->get_news_home('news')->result();
        if (strlen($username) >=4 && strlen($password) >=4 && strlen($email)>=4) {
            $is_register = $this->model_tracer->get_data_alumni($nim)->row()->is_register;
            if($is_register==1){
                $data['title'] = 'Tracer Study - Register';
                $data['error_reg'] = 'Maaf, Anda sudah terdaftar, untuk mengetahui username/password harap hubungi admin.';
                $this->load->view("client/header", $data);
                $this->load->view("client/content/tracer/register");
                $this->load->view("client/footer");
            }else{
                $dataAlumni = array(
                    'username' => $username,
                    'password' => md5($password),
                    'email' => $email,
                    'is_register' => '1'
                );
                $this->model_tracer->update_data_alumni($nim, $dataAlumni);
                $data['title'] = 'Tracer Study - Result';
                $this->load->view("client/header", $data);
                $this->load->view("client/content/tracer/register_result");
                $this->load->view("client/footer");
            }

        }else{
            $data['title'] = 'Tracer Study - Register';
            $data['error_reg'] = 'Username/Password/Email tidak lengkap';
            $this->load->view("client/header", $data);
            $this->load->view("client/content/tracer/register");
            $this->load->view("client/footer");
        }

    }

    public function login(){
        if($this->auth_client->do_login($this->input->POST('username'),$this->input->POST('password'))){
            redirect('tracer/home');
        }else{
            $data['error_login']="username atau password salah";
            $data['tips'] = $this->model_content->get_content_home('tips')->result();
            $data['lowongan'] = $this->model_content->get_content_home('lowongan')->result();
            $data['agenda'] = $this->model_content->get_content_home('agenda')->result();
            $data['news'] = $this->model_content->get_news_home('news')->result();
            $data['title'] = 'Tracer Study';
            $this->load->view("client/header", $data);
            $this->load->view("client/content/tracer/login");
            $this->load->view("client/footer");
        }

    }

    public function kuisioner(){
        $this->auth_client->restrict();
        $nim = $this->session->userdata('nim');
        $data['news'] = $this->model_content->get_news_home('news')->result();
        $data['mhs']= $this->model_tracer->get_data_alumni($nim)->row();
        $data['mhs2']= $this->model_tracer->get_data_mahasiswa($nim)->row();
        $data['kuis'] = $this->model_tracer->get_data_kuisioner($nim)->row();
        $data['title'] = 'Tracer Study - Kuisioner';
        $data['update_status'] = '';
        $this->load->view("client/header", $data);
        $this->load->view("client/content/tracer/home/kuisioner");
        $this->load->view("client/footer");
    }

    public function kuisioner_submit(){
        $this->auth_client->restrict();
        $nim = $this->input->POST('nim');
        $data['news'] = $this->model_content->get_news_home('news')->result();
        $data['mhs']= $this->model_tracer->get_data_alumni($nim)->row();
        $data['mhs2']= $this->model_tracer->get_data_mahasiswa($nim)->row();
        $bag1_tahun_lulus = $this->input->POST('bag1_tahun_lulus');
        $bag1_nama_instansi = $this->input->POST('bag1_nama_instansi');
        $bag1_posisi_jabatan = $this->input->POST('bag1_posisi_jabatan');
        $bag1_waktu_tunggu_pek = $this->input->POST('bag1_waktu_tunggu_pek');
        $bag1_gaji_pertama = $this->input->POST('bag1_gaji_pertama');
        $bag1_bidang_pek = $this->input->POST('bag1_bidang_pek');
        $bag2_nama_instansi = $this->input->POST('bag2_nama_instansi');
        $bag2_posisi_jabatan = $this->input->POST('bag2_posisi_jabatan');
        $bag2_bidang_pek = $this->input->POST('bag2_bidang_pek');
        $bag3_kategori_pek_sekarang = $this->input->POST('bag3_kategori_pek_sekarang');
        $bag3_syarat_bhs_asing = $this->input->POST('bag3_syarat_bhs_asing');
        $bag3_alasan_bhs_asing = $this->input->POST('bag3_alasan_bhs_asing');
        $bag3_matkul_1 = $this->input->POST('bag3_matkul_1');
        $bag3_matkul_2 = $this->input->POST('bag3_matkul_2');
        $bag3_matkul_3 = $this->input->POST('bag3_matkul_3');
        $bag3_materi_1 = $this->input->POST('bag3_materi_1');
        $bag3_materi_2 = $this->input->POST('bag3_materi_2');
        $bag3_materi_3 = $this->input->POST('bag3_materi_3');
        $saran_stta = $this->input->POST('saran_stta');
        $saran_prodi = $this->input->POST('saran_prodi');

        $dataKuis = array(
            'nim' => $nim,
          'bag1_tahun_lulus' =>  $bag1_tahun_lulus,
            'bag1_nama_instansi' =>  $bag1_nama_instansi,
            'bag1_posisi_jabatan' =>  $bag1_posisi_jabatan,
            'bag1_waktu_tunggu_pek' =>  $bag1_waktu_tunggu_pek,
            'bag1_gaji_pertama' =>  $bag1_gaji_pertama,
            'bag1_bidang_pek' =>  $bag1_bidang_pek,
            'bag2_nama_instansi' =>  $bag2_nama_instansi,
            'bag2_posisi_jabatan' =>  $bag2_posisi_jabatan,
            'bag2_bidang_pek' =>  $bag2_bidang_pek,
            'bag3_kategori_pek_sekarang' =>  $bag3_kategori_pek_sekarang,
            'bag3_syarat_bhs_asing' =>  $bag3_syarat_bhs_asing,
            'bag3_alasan_bhs_asing' =>  $bag3_alasan_bhs_asing,
            'bag3_matkul_1' =>  $bag3_matkul_1,
            'bag3_matkul_2' =>  $bag3_matkul_2,
            'bag3_matkul_3' =>  $bag3_matkul_3,
            'bag3_materi_1' =>  $bag3_materi_1,
            'bag3_materi_2' =>  $bag3_materi_2,
            'bag3_materi_3' =>  $bag3_materi_3,
            'saran_stta' =>  $saran_stta,
            'saran_prodi' =>  $saran_prodi
        );

        $this->model_tracer->insert_or_update_kuisioner($nim, $dataKuis);
        $data['kuis'] = $this->model_tracer->get_data_kuisioner($nim)->row();
        $data['update_status'] = 'Kuisioner berhasil dikirim';
        $data['title'] = 'Tracer Study - Kuisioner';
        $this->load->view("client/header", $data);
        $this->load->view("client/content/tracer/home/kuisioner");
        $this->load->view("client/footer");

    }

    public function home(){
        $this->auth_client->restrict();
        $nim = $this->session->userdata('nim');
        $data['news'] = $this->model_content->get_news_home('news')->result();
        $data['mhs']= $this->model_tracer->get_data_alumni($nim)->row();
        $data['mhs2']= $this->model_tracer->get_data_mahasiswa($nim)->row();
        $data['title'] = 'Tracer Study - Home';
        $this->load->view("client/header", $data);
        $this->load->view("client/content/tracer/home/user");
        $this->load->view("client/footer");
    }

    public function teman(){
        $this->auth_client->restrict();
        $data['tips'] = $this->model_content->get_content_home('tips')->result();
        $data['lowongan'] = $this->model_content->get_content_home('lowongan')->result();
        $data['agenda'] = $this->model_content->get_content_home('agenda')->result();
        $data['news'] = $this->model_content->get_news_home('news')->result();
        $data['title'] = 'Tracer Study - Teman';
        $this->load->view("client/header", $data);
        $this->load->view("client/content/tracer/home/teman_seangkatan");
        $this->load->view("client/footer");
    }

    public function pesan(){
        $this->auth_client->restrict();
        $nim = $this->session->userdata('nim');
        $data['tips'] = $this->model_content->get_content_home('tips')->result();
        $data['lowongan'] = $this->model_content->get_content_home('lowongan')->result();
        $data['agenda'] = $this->model_content->get_content_home('agenda')->result();
        $data['news'] = $this->model_content->get_news_home('news')->result();
        $data['mhs']= $this->model_tracer->get_data_alumni($nim)->row();
        $data['mhs2']= $this->model_tracer->get_data_mahasiswa($nim)->row();
        $data['title'] = 'Tracer Study - Pesan';
        $this->load->view("client/header", $data);
        $this->load->view("client/content/tracer/home/pesan");
        $this->load->view("client/footer");
    }

    public function logout(){
        $this->session->sess_destroy();
        $data['error_login']='';
        $data['tips'] = $this->model_content->get_content_home('tips')->result();
        $data['lowongan'] = $this->model_content->get_content_home('lowongan')->result();
        $data['agenda'] = $this->model_content->get_content_home('agenda')->result();
        $data['news'] = $this->model_content->get_news_home('news')->result();
        $data['title'] = 'Tracer Study';
        $this->load->view("client/header", $data);
        $this->load->view("client/content/tracer/login");
        $this->load->view("client/footer");
    }

    public function edit_profil(){
        $this->auth_client->restrict();
        $nim = $this->session->userdata('nim');
        $data['news'] = $this->model_content->get_news_home('news')->result();
        $data['mhs']= $this->model_tracer->get_data_alumni($nim)->row();
        $data['mhs2']= $this->model_tracer->get_data_mahasiswa($nim)->row();
        $data['provinsi']=$this->model_tracer->get_provinsi()->result();
        $data['kabupaten']=$this->model_tracer->get_kabupaten()->result();
        $data['title'] = 'Tracer Study -  Profil';
        $data['update_status'] = '';
        $this->load->view("client/header", $data);
        $this->load->view("client/content/tracer/home/edit_profil");
        $this->load->view("client/footer");
    }

    public function update_alumni(){
        $this->auth_client->restrict();
        $nim = $this->input->POST('nim');
        $data['news'] = $this->model_content->get_news_home('news')->result();
        $data['mhs']= $this->model_tracer->get_data_alumni($nim)->row();
        $data['mhs2']= $this->model_tracer->get_data_mahasiswa($nim)->row();
        $instansi = $this->input->POST('instansi');
        $alamatp = $this->input->POST('alamatp');
        $kabupaten = $this->input->POST('kabupaten');
        $provinsi = $this->input->POST('provinsi');
        $negara = $this->input->POST('negara');
        $kodepos = $this->input->POST('kodepos');
        $notlp = $this->input->POST('notlp');
        $jabatan = $this->input->POST('jabatan');
        $kesesuaian = $this->input->POST('kesesuaian');
        $alamats = $this->input->POST('alamats');
        $kabupaten1 = $this->input->POST('kabupaten1');
        $kode_post = $this->input->POST('kode_post');
        $provinsi1 = $this->input->POST('provinsi1');
        $tlp1 = $this->input->POST('tlp1');
        $hp = $this->input->POST('hp');
        $email = $this->input->POST('email');
        $ttgsaya = $this->input->POST('ttgsaya');
        $data['mhs']= $this->model_tracer->get_data_alumni($nim)->row();
        $data['mhs2']= $this->model_tracer->get_data_mahasiswa($nim)->row();
        $data['tips'] = $this->model_content->get_content_home('tips')->result();
        $data['lowongan'] = $this->model_content->get_content_home('lowongan')->result();
        $data['agenda'] = $this->model_content->get_content_home('agenda')->result();
        $data['news'] = $this->model_content->get_news_home('news')->result();

        $dataAlumni = array(
            'instansi' => $instansi,
            'alamatp' => $alamatp,
            'kabupaten' => $kabupaten,
            'provinsi' => $provinsi,
            'negara' => $negara,
            'kodepos' => $kodepos,
            'notlp' => $notlp,
            'jabatan' => $jabatan,
            'kesesuaian' => $kesesuaian,
            'alamats' => $alamats,
            'kabupaten1' => $kabupaten1,
            'kode_post' => $kode_post,
            'provinsi1' => $provinsi1,
            'tlp1' => $tlp1,
            'hp' => $hp,
            'ttgsaya' => $ttgsaya,
            'email' => $email
        );
        $this->model_tracer->update_profil_alumni($nim, $dataAlumni);
        $data['provinsi']=$this->model_tracer->get_provinsi()->result();
        $data['kabupaten']=$this->model_tracer->get_kabupaten()->result();
        $data['update_status'] = 'Update Data Sukses';
        $data['title'] = 'Tracer Study -  Profil';
        $this->load->view("client/header", $data);
        $this->load->view("client/content/tracer/home/edit_profil");
        $this->load->view("client/footer");


    }

    function upload_foto(){
        $this->auth_client->restrict();
        $nim = $this->session->userdata('nim');
        $data['news'] = $this->model_content->get_news_home('news')->result();
        $data['mhs']= $this->model_tracer->get_data_alumni($nim)->row();
        $data['mhs2']= $this->model_tracer->get_data_mahasiswa($nim)->row();
        $data['title'] = 'Tracer Study -  Upload Foto';
        $data['error'] = '';
        $this->load->view("client/header", $data);
        $this->load->view("client/content/tracer/home/upload_foto");
        $this->load->view("client/footer");
    }

    public function do_upload()
    {
        $this->auth_client->restrict();
        $nim = $this->session->userdata('nim');
        $config['upload_path']          = './assets/uploads/files/foto';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 2048000;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('foto'))
        {
            $error = array('error' => $this->upload->display_errors());
            $data['news'] = $this->model_content->get_news_home('news')->result();
            $data['mhs']= $this->model_tracer->get_data_alumni($nim)->row();
            $data['mhs2']= $this->model_tracer->get_data_mahasiswa($nim)->row();
            $data['title'] = 'Tracer Study -  Upload Foto';
            $data['error'] = $this->upload->display_errors();
            $this->load->view("client/header", $data);
            $this->load->view("client/content/tracer/home/upload_foto");
            $this->load->view("client/footer");
        }
        else
        {
            $fotoname = $this->upload->data('file_name');
            $this->model_tracer->update_foto_alumni($nim, $fotoname);
            $data['news'] = $this->model_content->get_news_home('news')->result();
            $data['mhs']= $this->model_tracer->get_data_alumni($nim)->row();
            $data['mhs2']= $this->model_tracer->get_data_mahasiswa($nim)->row();
            $data['title'] = 'Tracer Study -  Upload Sukses';
            $data['error'] = '';
            $this->load->view("client/header", $data);
            $this->load->view("client/content/tracer/home/upload_sukses");
            $this->load->view("client/footer");
        }
    }


}