<?php
defined('BASEPATH') or exit('No direct script allowed access');
class DB_Siswa extends CI_MOdel
{
  public function Registration()
  {
    $data = [
      'firstname' => $this->input->post('firstname'),
      'lastname' => $this->input->post('lastname'),
      'email' => $this->input->post('email'),
      'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
      'konfir_password' => password_hash($this->input->post('konfirmasipassword'), PASSWORD_DEFAULT),
    ];
    $this->db->insert('user', $data);
  }
  public function TotalUser()
  {
    return $this->db->get('user')->num_rows();
  }
}
