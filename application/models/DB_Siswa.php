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
  public function TotalCalonSiswa()
  {
    return $this->db->get('calon_siswa')->num_rows();
  }
  public function daftarSiswa()
  {
    $data = [
      'nama_lengkap' => $this->input->post('nama_lengkap', true),
      'nama_panggilan' => $this->input->post('nama_panggilan', true),
      'jenis_kelamin' => $this->input->post('jenis_kelamin', true),
      'tempatlahir' => $this->input->post('tempatlahir', true),
      'tgl' => $this->input->post('tgl', true),
      'agama' => $this->input->post('agama', true),
      'cita-cita' => $this->input->post('cita-cita', true),
      'hobby' => $this->input->post('hobby', true),
      'kewarganegaraan' => $this->input->post('kewarganegaraan', true),
      'anak' => $this->input->post('anak', true),
      'jumlah_saudara' => $this->input->post('jumlah_saudara', true),
      'bahasa' => $this->input->post('bahasa', true),
      'sekolah_asal' => $this->input->post('sekolah_asal', true),
      'no_hp' => $this->input->post('no_hp', true),
      'prestasi' => $this->input->post('prestasi', true)
    ];
    $this->db->insert('calon_siswa', $data);
  }
  public function getDataCalonSiswa()
  {
    return $this->db->get('calon_siswa')->result();
  }
  public function DetailCalonSiswa($id)
  {
    return $this->db->get_where('calon_siswa', array('id' => $id))->row_array();
  }
}
