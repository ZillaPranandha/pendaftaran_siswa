<?php
defined('BASEPATH') or exit('No direct script allowed access');
class Login extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('DB_Siswa');
    $this->load->library('form_validation');
    date_default_timezone_set('Asia/Jakarta');
  }

  public function index()
  {
    $data['Title'] = 'SMA-IT Mutiara';
    $data['SecondTitle'] = ' ~ Login';
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
    $this->form_validation->set_rules('password', 'Password', 'trim|required');
    if ($this->form_validation->run() == true) {
      $this->VerifikasiLogin();
    } else {
      $this->load->view('TemplateLogin/Header', $data);
      $this->load->view('Login/index');
      $this->load->view('TemplateLogin/footer');
    }
  }

  public function VerifikasiLogin()
  {
    $email = $this->input->post("email");
    $password = $this->input->post("password");
    $akun = $this->db->get_where('user', array('email' => $email))->row_array();
    if ($akun) {
      if (password_verify($password, $akun['password'])) {
        $data['email'] = $akun['email'];
        $this->session->set_userdata($data);
        redirect('Home');
      } else {
        $this->session->set_flashdata('Pesan', '<div class="alert alert-danger" role="alert">
        Password Anda <b> Salah<b>.
      </div>');
        redirect('Login');
      }
    } else {
      $this->session->set_flashdata('Pesan', '<div class="alert alert-danger" role="alert">
      Akun anda tidak<b> terdaftar<b>.
    </div>');
      redirect('Login');
    }
  }

  public function Registrasi()
  {
    $data['Title'] = 'SMA-IT Mutiara';
    $data['SecondTitle'] = ' ~ Registrasi';
    $this->form_validation->set_rules('firstname', 'Nama Depan', 'required');
    $this->form_validation->set_rules('lastname', 'Nama Belakang', 'required');
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[user.email]');
    $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[5]|matches[konfirmasipassword]');
    $this->form_validation->set_rules('konfirmasipassword', 'Konfirmasi Password', 'required|trim|matches[password]');
    if ($this->form_validation->run() == false) {
      $this->load->view('TemplateLogin/Header', $data);
      $this->load->view('Login/Register');
      $this->load->view('TemplateLogin/footer');
    } else {
      $this->DB_Siswa->Registration();
      $this->session->set_flashdata('Pesan', '<div class="alert alert-info" role="alert">
      Akun berhasil <b>terdaftar</b>.</div>');
      redirect('Login');
    }
  }
  public function Logout()
  {
    $this->session->unset_userdata('email');
    $this->session->set_flashdata('Pesan', '<div class="alert alert-info" role="alert">
    Anda Berhasil <b>Logout</b>.
  </div>');
    redirect('Login');
  }
}
