<?php
defined('BASEPATH') or exit('No direct script allowed access');
class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('DB_Siswa');
        if (!$this->session->userdata('email')) {
            redirect('Login');
        }
    }

    public function index()
    {
        $data['TotalUser'] = $this->DB_Siswa->TotalUser();
        $data['Title'] = 'SMA-IT Mutiara';
        $data['SecondTitle'] = ' ~ Home ';
        $data['TotalCalonSiswa'] = $this->DB_Siswa->TotalCalonSiswa();
        $data['user'] = $this->db->get_where('user', array('email' => $this->session->userdata('email')))->row_array();
        $this->load->view('Template/Header', $data);
        $this->load->view('Template/Sidebar');
        $this->load->view('Home/Home');
        $this->load->view('Template/Footer');
    }
}
