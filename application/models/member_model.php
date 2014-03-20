<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class member_model extends CI_Model{
    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
     public function get_data(){
        $query = "select * from pegawai";
        return $this->db->query($query);
    }
    
    public function cek_login($nip, $pass){
        $pass_ = md5($pass);
        $query = $this->db->get_where('pegawai', array('PEGAWAI_NIP '=> $nip,'PEGAWAI_PASSWORD'=> $pass_),1);
        if ($query->num_rows() > 0)  return $query->row();
        else return FALSE;
    }
}
