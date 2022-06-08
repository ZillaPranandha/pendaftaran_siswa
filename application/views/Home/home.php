<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Halaman Utama</h1>
        </div>
        <div class="row d-flex justify-content-around">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <i class="far fa-user"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Admin</h4>
                        </div>
                        <div class="card-body">
                            10
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-warning">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Calon Siswa</h4>
                        </div>
                        <div class="card-body">
                            1,201
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-success">
                        <i class="fas fa-circle"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Users</h4>
                        </div>
                        <div class="card-body">
                            <?= $TotalUser; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 mb-4">
                <div class="hero align-items-center bg-success text-white">
                    <div class="hero-inner ">
                        <h2>Welcome,<?= $user['firstname']; ?></h2>
                        <p class="lead">Kamu berhasil login ke web SMA-IT Mutiara.</p>
                        <p>Klik tombol Daftar jika ingin masuk ke SMA-IT Mutiara.</p>
                        <div class="mt-4 text-center">
                            <a href="#" class="btn btn-outline-white btn-lg btn-icon icon-left"><i class="fas fa-sign-in-alt"></i> Daftar Siswa </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Rating SMA Se-kabupaten Bengkalis </h4>
                    </div>
                    <div class="card-body">
                        <div class="mb-4">
                            <div class="text-small float-right font-weight-bold text-muted">66,48</div>
                            <div class="font-weight-bold mb-1"> SMAS Cendana Mandau</div>
                            <div class="progress" data-height="3">
                                <div class="progress-bar bg-success" role="progressbar" data-width="67%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <div class="text-small float-right font-weight-bold text-muted">66,26</div>
                            <div class="font-weight-bold mb-1">SMAS IT Mutiara Duri</div>
                            <div class="progress" data-height="3">
                                <div class="progress-bar bg-success" role="progressbar" data-width="66%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <div class="text-small float-right font-weight-bold text-muted">65,06</div>
                            <div class="font-weight-bold mb-1">SMAN 2 Mandau</div>
                            <div class="progress " data-height="3">
                                <div class="progress-bar bg-success" role="progressbar" data-width="64%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <div class="text-small float-right font-weight-bold text-muted">64,62</div>
                            <div class="font-weight-bold mb-1">SMAN 1 Mandau</div>
                            <div class="progress" data-height="3">
                                <div class="progress-bar bg-success" role="progressbar" data-width="62%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <div class="text-small float-right font-weight-bold text-muted">64,32</div>
                            <div class="font-weight-bold mb-1">SMAN 2 Rupat</div>
                            <div class="progress" data-height="3">
                                <div class="progress-bar bg-success" role="progressbar" data-width="61%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <div class="text-small float-right font-weight-bold text-muted">62,33</div>
                            <div class="font-weight-bold mb-1">SMAN 1 Bengkalis</div>
                            <div class="progress" data-height="3">
                                <div class="progress-bar bg-success" role="progressbar" data-width="60%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Tentang SMA-IT Mutiara Duri</h4>

                    </div>
                    <div class="card-body">
                        <div class="summary ">
                            <div class="text-center ">
                                <img class="rounded shadow-lg img-fluid" width="400px" src="<?= base_url('assets/img/products/school.jpg'); ?>" alt="Mutiara">
                            </div>
                            <div class="summary-item mt-3 text-dark" style="font-family:'Roboto Slab',serif;">
                                <p><strong>SMAS MUTIARA</strong> adalah salah satu satuan pendidikan dengan jenjang SMA di Titian Antui, Kec. Pinggir, Kab. Bengkalis, Riau. Dalam menjalankan kegiatannya,
                                    SMAS MUTIARA berada di bawah naungan Kementerian Pendidikan dan Kebudayaan
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>