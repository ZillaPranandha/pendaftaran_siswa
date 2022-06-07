<?php
defined('BASEPATH') or exit('No direct script allowed access');
class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('email')) {
            redirect('Login');
        }
    }

    public function index()
    {
        $data['Title'] = 'SMA-IT Mutiara';
        $this->load->view('Template/Header', $data);
        $this->load->view('Template/Sidebar');
        $this->load->view('Home/Home');
        $this->load->view('Template/Footer');
    }
}
