<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Member extends CI_Controller {
    
    public function __construct() {
         parent::__construct();
         $this->load->library('session');
         $this->load->helper('url');
         $this->load->library('form_validation');
         $this->load->model('member_model');
         
         $this->pegawai_nip = $this->session->userdata('pegawai_id');
         $this->pegawai_nama = $this->session->userdata('pegawai_nama');
    }
    
    public function index()
    {   
        if($this->pegawai_nip){
            redirect("menu");
        }
        $this->login();
    }
    
    public function login()
    {
        $nip = $this->input->post('nip');
        $pass = $this->input->post('pass');

        $this->form_validation->set_rules('nip', 'NIP', 'trim|required');
        $this->form_validation->set_rules('pass', 'Password', 'trim|required');

        if ($this->form_validation->run() == FALSE)
        {
            $data["ket"] = ""; 
            $this->load->view('template/header');
            $this->load->view('member/login');
            $this->load->view('template/footer');
        }else{
            $data_member = $this->member_model->cek_login($nip, $pass);
            if($data_member){
                $this->session->set_userdata('pegawai_nip',$data_member->PEGAWAI_NIP);
                $this->session->set_userdata('pegawai_nama',$data_member->PEGAWAI_NAMA);
                $data["ket"] = "Sukses login $data_member->PEGAWAI_NAMA";
                redirect('menu');
            }else {
                $data["ket"] = "NIP dan Password tidak valid";
                $this->load->view('template/header');
                $this->load->view('member/login', $data);
                $this->load->view('template/footer');
            }
        }
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */