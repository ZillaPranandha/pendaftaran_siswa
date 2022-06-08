<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Detail Calon Siswa</h1>
    </div>
    <div class="section-body">
      <div class="row justify-content-center ">
        <div class="col-lg-6">
          <div class="card profile-widget">
            <div class="card-header justify-content-center">
              <h4 class="text-capitalize ">Data Lengkap <?= $CalonSiswa['nama_lengkap']; ?></h4>
            </div>
            <div class="profile-widget-header">
              <div class="profile-widget-items">
                <div class="profile-widget-item">
                  <div class="profile-widget-item-value text-capitalize"><?= $CalonSiswa['nama_lengkap']; ?></div>
                </div>
                <div class="profile-widget-item">
                  <div class="profile-widget-item-value text-capitalize"><?= $CalonSiswa['tempatlahir']; ?></div>
                  <div class="profile-widget-item-value text-capitalize"><?= $CalonSiswa['tgl']; ?></div>
                </div>
                <div class="profile-widget-item">
                  <div class="profile-widget-item-value text-capitalize"><?= $CalonSiswa['jenis_kelamin']; ?></div>
                </div>
              </div>
            </div>
            <div class="profile-widget-description" style="font-family:'Roboto Slab',serif" ;>
              <dl class="row ">
                <dt class="col-sm-5">Nama Panggilan </dt>
                <dd class="col-sm-7 text-capitalize"><?= $CalonSiswa['nama_panggilan']; ?></dd>
                <dt class="col-sm-5">Cita-Cita </dt>
                <dd class="col-sm-7 text-capitalize"><?= $CalonSiswa['cita-cita']; ?></dd>
                <dt class="col-sm-5">Hobby </dt>
                <dd class="col-sm-7 text-capitalize"><?= $CalonSiswa['hobby']; ?></dd>
                <dt class="col-sm-5">Kewarganegaraan </dt>
                <dd class="col-sm-7 text-capitalize"><?= $CalonSiswa['kewarganegaraan']; ?></dd>
                <dt class="col-sm-5">Anak ke </dt>
                <dd class="col-sm-7 text-capitalize"><?= $CalonSiswa['anak']; ?></dd>
                <dt class="col-sm-5">Jumlah Saudara </dt>
                <dd class="col-sm-7 text-capitalize"><?= $CalonSiswa['jumlah_saudara']; ?></dd>
                <dt class="col-sm-5">Bahasa Sehari-hari </dt>
                <dd class="col-sm-7 text-capitalize"><?= $CalonSiswa['bahasa']; ?></dd>
                <dt class="col-sm-5">Sekolah Asal </dt>
                <dd class="col-sm-7 text-uppercase"><?= $CalonSiswa['sekolah_asal']; ?></dd>
                <dt class="col-sm-5">Nomor Handphone </dt>
                <dd class="col-sm-7 text-capitalize"><?= $CalonSiswa['no_hp']; ?></dd>
                <dt class="col-sm-5">Prestasi</dt>
                <dd class="col-sm-7 text-capitalize"><?= $CalonSiswa['prestasi']; ?></dd>
              </dl>
              <div class="float-right">
                <a type="submit" class="btn btn-icon btn-icon-left btn-info btn-md text-white" href="<?= site_url('Pendaftaran/dataCalonSiswa'); ?>">
                  <svg xmlns=" http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-backspace" viewBox="0 0 16 16">
                    <path d="M5.83 5.146a.5.5 0 0 0 0 .708L7.975 8l-2.147 2.146a.5.5 0 0 0 .707.708l2.147-2.147 2.146 2.147a.5.5 0 0 0 .707-.708L9.39 8l2.146-2.146a.5.5 0 0 0-.707-.708L8.683 7.293 6.536 5.146a.5.5 0 0 0-.707 0z" />
                    <path d="M13.683 1a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-7.08a2 2 0 0 1-1.519-.698L.241 8.65a1 1 0 0 1 0-1.302L5.084 1.7A2 2 0 0 1 6.603 1h7.08zm-7.08 1a1 1 0 0 0-.76.35L1 8l4.844 5.65a1 1 0 0 0 .759.35h7.08a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1h-7.08z" />
                  </svg>
                  Kembali
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>