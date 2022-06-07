<?php
defined('BASEPATH') OR exit('No direct script allowed');
class Web extends CI_Controller{
    public function index(){
        $data['judul'] = 'Halaman Depan';
        $this->load->view('index',$data);
    }
}