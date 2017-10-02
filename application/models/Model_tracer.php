<?php
/**
 * Created by PhpStorm.
 * User: saifulbahri
 * Date: 9/27/17
 * Time: 6:30 AM
 */

class Model_tracer extends CI_Model{
    function index(){
    }
    function get_slider(){
        $query=$this->db->get('db_slider');
        return $query;
    }

    function get_content_home($category){
        $query = $this->db->get_where('db_content', array('category' => $category), 4, 0);
        return $query;
    }

    function get_list($category, $limit, $asset){
        $query = $this->db->get_where('db_content', array('category' => $category), $limit, $asset);
        return $query;
    }

    function search_alumni($nama, $jurusan, $angkatan){
        $this->db->where('LOWER(nama)', strtolower($nama));
        if($jurusan == 'all'){
            $this->db->where('kd_prodi LIKE', '%%');
        }
        else{
            $this->db->where('kd_prodi =', $jurusan);
        }
        if($angkatan == 'all')
            $this->db->where('nim LIKE', '%%');
        else
            $this->db->where('nim LIKE', $angkatan+'%');
        return $this->db->get('db_alumni');
    }

    function get_data_mahasiswa($nim){
        $query = $this->db->get_where('db_mhs', array('nim' => $nim));
        return $query;
    }

    function insert_or_update_kuisioner($nim, $data){
        $valid = $this->get_data_kuisioner($nim)->num_rows()>0;
        if($valid){
            $this->db->where('nim', $nim);
            $this->db->update('t_kuisioner', $data);
        }else{
            $this->db->set($data);
            $this->db->insert('t_kuisioner');
        }
    }

    function get_data_mahasiswa_by_nim_tgl_lahir($nim, $lahir){
        $query = $this->db->get_where('db_mhs', array('nim' => $nim, 'tgl_lahir' => $lahir));
        return $query;
    }

    function get_data_kuisioner($nim){
        $query = $this->db->get_where('t_kuisioner', array('nim' => $nim));
        return $query;
    }

    function get_data_alumni($nim){
        $query = $this->db->get_where('db_alumni', array('nim' => $nim));
        return $query;
    }

    function update_data_alumni($nim, $data){
        $this->db->where('nim', $nim);
        $this->db->update('db_alumni', $data);
    }

    function update_profil_alumni($nim, $data){
        $this->db->where('nim', $nim);
        $this->db->update('db_mhs', $data);
    }

    function get_kabupaten(){
        $query=$this->db->get('t_kabupaten');
        return $query;
    }

    function get_provinsi(){
        $query=$this->db->get('t_provinsi');
        return $query;
    }

    function update_foto_alumni($nim, $data){
        $this->db->set('foto', $data);
        $this->db->where('nim', $nim);
        $this->db->update('db_mhs');
    }
}