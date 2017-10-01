<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Auth library
 *
 * @author	Anggy Trisnawan
 */
class Auth_client{
    var $CI = NULL;
    function __construct()
    {
        // get CI's object
        $this->CI =& get_instance();
    }
    // untuk validasi login
    function do_login($username,$password)
    {
        // cek di database, ada ga?
        $this->CI->db->from('db_alumni');
        $this->CI->db->where('username',$username);
        $this->CI->db->where('password',md5($password));
        $result = $this->CI->db->get();
        if($result->num_rows() == 0)
        {
            // username dan password tsb tidak ada
            return false;
        }
        else
        {
            // ada, maka ambil informasi dari database
            $userdata = $result->row();
            $session_data = array(
                'id_login'	=> $userdata->id,
                'nama'		=> $userdata->nama,
                'username' => $userdata->username,
                'nim' => $userdata->nim
            );
            // buat session
            $this->CI->session->set_userdata($session_data);
            return true;
        }
    }
    // untuk mengecek apakah user sudah login/belum
    function is_logged_in()
    {
        if($this->CI->session->userdata('id_login') == '')
        {
            return false;
        }
        return true;
    }
    // untuk validasi di setiap halaman yang mengharuskan authentikasi
    function restrict()
    {
        if($this->is_logged_in() == false)
        {
            redirect('tracer');
        }
    }

    // untuk logout
    function do_logout()
    {
        $this->CI->session->sess_destroy();
    }
}