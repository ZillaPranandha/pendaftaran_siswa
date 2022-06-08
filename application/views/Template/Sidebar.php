<div class="main-sidebar">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="<?= site_url('Home'); ?>">SMA-IT Mutiara</a>
    </div>

    <ul class="sidebar-menu">
      <li class="menu-header">Dashboard</li>
      <li class="nav-item dropdown active">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-home"></i><span>Dashboard</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="<?= site_url('Home'); ?>">Halaman Utama</a></li>
        </ul>
      </li>
      <li class="menu-header">Pendaftaran</li>
      <li class="nav-item dropdown">
        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-school"></i></i> <span>Pendaftaran</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="<?= site_url('Pendaftaran'); ?>"><span>Formulir Pendaftaran</span></a></li>
          <li><a class="nav-link" href="<?= site_url('Pendaftaran/DataCalonSiswa'); ?>"><span>Data Calon Siswa</span></a></li>
        </ul>
      </li>

      <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
        <a href="<?= site_url('Login/Logout'); ?>" class="btn btn-primary btn-lg btn-block btn-icon-split">
          <i class="fas fa-sign-out-alt"></i> Logout
        </a>
      </div>
  </aside>
</div>