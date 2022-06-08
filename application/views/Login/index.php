<div id="app">
  <section class="section">
    <div class="container ">
      <div class="row justify-content-center">
        <div class="col-lg-5">
          <div class="login-brand">
            <img src="<?= base_url('assets/img/Logo/Login.png'); ?>" alt="logo" width="200px" class="shadow-light rounded-circle">
          </div>

          <div class="card card-success">
            <div class="card-header justify-content-center aligns-item-center">
              <div class="text-success">
                <h2>SMA-IT Mutiara </h2>
                <h4 class="text-uppercase text-center text-success">Login</h2>
              </div>
            </div>
            <?php if ($this->session->flashdata('Pesan')) : ?>
              <div class="row justify-content-center" id="Alert">
                <div class="col-lg-9">
                  <?= $this->session->flashdata('Pesan'); ?>
                </div>
              </div>
            <?php endif; ?>
            <div class="card-body">
              <form method="POST" action="" class="needs-validation">
                <div class="form-group">
                  <label for="email">Email</label>
                  <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus>
                  <small class="text-danger"><?= form_error('email'); ?></small>
                </div>

                <div class="form-group">
                  <div class="d-block">
                    <label for="password" class="control-label">Password</label>
                  </div>
                  <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                  <small class="text-danger"><?= form_error('password'); ?></small>
                </div>

                <div class="form-group">
                  <div class="float-center">
                    <a href="" class="text-small">
                      Forgot Password?
                    </a>
                  </div>
                </div>

                <div class="form-group">
                  <button type="submit" class="btn btn-success btn-lg btn-block" tabindex="4">
                    Login
                  </button>
                </div>
                <div class="form-group">
                  <div class="mt-5 text-muted text-center">
                    Belum punya akun ? <a href="<?= site_url('Login/Registrasi'); ?>">Silahkan Daftar</a>
                  </div>
                </div>
              </form>
            </div>
          </div>