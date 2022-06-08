<?php
defined('BASEPATH') or exit('No direct script allowed access');
class Pendaftaran extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('DB_Siswa');
    if (!$this->session->userdata('email')) {
      redirect('Login');
    }
    $this->load->library('form_validation');
  }

  public function index()
  {
    $data['Title'] = 'SMA-IT Mutiara';
    $data['SecondTitle'] = ' ~ Pendaftaran Siswa';
    $data['user'] = $this->db->get_where('user', array('email' => $this->session->userdata('email')))->row_array();
    $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required');
    $this->form_validation->set_rules('nama_panggilan', 'Nama Panggilan', 'required');
    $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
    $this->form_validation->set_rules('tempatlahir', 'Tempat Lahir', 'required');
    $this->form_validation->set_rules('tgl', 'Tanggal Lahir', 'required');
    $this->form_validation->set_rules('agama', 'Agama', 'required');
    $this->form_validation->set_rules('cita-cita', 'Cita-Cita', 'required');
    $this->form_validation->set_rules('tempatlahir', 'Tempat Lahir', 'required');
    $this->form_validation->set_rules('hobby', 'Hobby', 'required');
    $this->form_validation->set_rules('kewarganegaraan', 'Kewarganegaraan', 'required');
    $this->form_validation->set_rules('anak', 'Anak-Ke', 'required');
    $this->form_validation->set_rules('jumlah_saudara', 'Jumlah Saudara', 'required');
    $this->form_validation->set_rules('bahasa', 'Bahasa Sehari-Hari', 'required');
    $this->form_validation->set_rules('sekolah_asal', 'Sekolah Asal', 'required');
    $this->form_validation->set_rules('no_hp', 'Nomor Handphone', 'required');
    $this->form_validation->set_rules('prestasi', 'Prestasi', 'required');
    if ($this->form_validation->run() == false) {
      $this->load->view('Template/Header', $data);
      $this->load->view('Template/Sidebar', $data);
      $this->load->view('CalonSiswa/index');
      $this->load->view('Template/Footer', $data);
    } else {
      $this->DB_Siswa->daftarSiswa();
      $this->session->set_flashdata('Oke', '<div id="swal"></divi>');
      redirect('Home/index');
    }
  }
}