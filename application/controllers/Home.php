<?php
defined('BASEPATH') or exit('No direct script allowed access');
class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['Title'] = 'SMA-IT Mutiara';
        $this->load->view('Home/home', $data);
    }
}
