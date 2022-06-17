<?php if ($this->session->flashdata('Oke')) : ?>
  <?= $this->session->flashdata('Oke'); ?>
  <?php $this->session->unset_userdata('Oke'); ?>
<?php endif; ?>
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Data Calon Siswa SMA-IT Mutiara</h1>
    </div>

    <div class="section-body">
      <div class="row justify-content-center">
        <div class="col-lg">
          <div class="card">
            <div class="card-header justify-content-center">
              <h4 class="text-center">Data Calon Siswa</h4>
            </div>
            <div class="card-body p-0">
              <div class="table-responsive">
                <table class="table table-striped table-md">
                  <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Jenis Kelamin</th>
                    <th>Agama</th>
                    <th>Asal Sekolah</th>
                    <th>Prestasi</th>
                    <th>Action</th>
                  </tr>
                  <?php $i = 1; ?>
                  <?php foreach ($CalonSiswa as $c) : ?>
                    <tr class="text-dark" style="text-transform:capitalize;">
                      <td><b><?= $i++; ?></b></td>
                      <td><?= $c->nama_lengkap; ?></td>
                      <td><?= $c->jenis_kelamin; ?></td>
                      <td><?= $c->agama; ?></td>
                      <td style="text-transform:uppercase;"><?= $c->sekolah_asal; ?></td>
                      <td><?= $c->prestasi; ?></td>
                      <td>
                        <a href="<?= site_url('Pendaftaran/detailCalonSiswa/') . $c->id; ?>" class="btn btn-icon btn-left btn-primary">
                          <i class="fas fa-search-plus mr-1"></i>Detail</a>
                        <a href="<?= site_url('Pendaftaran/deleteCalonSiswa/') . $c->id; ?>" class="btn btn-icon btn-left btn-danger">
                          <i class="fas fa-fw fa-user-times mr-1"></i>Hapus</a>
                      </td>

                    </tr>
                  <?php endforeach; ?>
                </table>
              </div>
            </div>
            <div class="card-footer text-right">
              <nav class="d-inline-block">
                <ul class="pagination mb-0">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                  </li>
                  <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">2</a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>