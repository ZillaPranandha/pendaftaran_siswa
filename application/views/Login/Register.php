<div id="app">
  <section class="section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-7">
          <div class="login-brand">
            <img src="<?= base_url('assets/img/Logo/Login.png'); ?>" alt="logo" width="200px" class="shadow-light rounded-circle">
          </div>

          <div class="card card-success">
            <div class="card-header justify-content-center">
              <div class="text-success text-center">
                <h2>SMA-IT Mutiara</h2>
                <h3>Register</h3>
              </div>
            </div>

            <div class="card-body">
              <form method="POST" action="">
                <div class="row">
                  <div class="form-group col-lg-6">
                    <label for="firstname">Nama Depan </label>
                    <input id="firstname" type="text" class="form-control" name="firstname" value="<?= set_value('firstname'); ?>" autofocus>
                    <small class="text-danger"><?= form_error('firstname'); ?></small>
                  </div>
                  <div class="form-group col-lg-6">
                    <label for="lastname">Nama Belakang</label>
                    <input id="lastname" type="text" class="form-control" name="lastname" value="<?= set_value('lastname'); ?>">
                    <small class="text-danger"><?= form_error('lastname'); ?></small>
                  </div>
                </div>

                <div class="form-group ">
                  <label for="email">Email</label>
                  <input id="email" type="email" class="form-control" name="email" value="<?= set_value('email'); ?>">
                  <small class="text-danger"><?= form_error('email'); ?></small>
                </div>

                <div class="form-group ">
                  <label for="password" class="d-block">Password</label>
                  <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator" name="password">
                  <small class="text-danger"><?= form_error('password'); ?></small>
                </div>
                <div class="form-group">
                  <label for="password2" class="d-block">Konfirmasi Password</label>
                  <input id="password2" type="password" class="form-control" name="konfirmasipassword">
                  <small class="text-danger"><?= form_error('konfirmasipassword'); ?></small>
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-success btn-lg btn-block">
                    Daftar
                  </button>
                </div>
                <div class="form-group">
                  <div class="mt-5 text-muted text-center">
                    Sudah punya akun ? <a href="<?= site_url('Login/index'); ?>">Silahkan Login</a>
                  </div>
                </div>
              </form>
            </div>
          </div>