<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Formulir Pendaftaran Siswa SMA-IT Mutiara </h1>
    </div>

    <div class="section-body">
      <div class="row justify-content-center">
        <div class="col-lg-7">
          <div class="card">
            <div class="card-header">
              <h4 class="text-center">Isi Formulir untuk menjadi siswa SMA-IT Mutiara</h4>
            </div>
            <form action="" method="POST">
              <div class="card-body">

                <div class="form-group">
                  <label for="nama_lengkap">Nama Lengkap :</label>
                  <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap">
                  <small class="text-danger"><?= form_error('nama_lengkap'); ?></small>
                </div>
                <div class="form-group">
                  <label for="nama_panggilan">Nama Panggilan :</label>
                  <input type="text" class="form-control" name="nama_panggilan" id="nama_panggilan">
                  <small class="text-danger"><?= form_error('nama_panggilan'); ?></small>
                </div>
                <div class="form-group">
                  <label for="jenis_kelamin">Jenis Kelamin : </label>
                  <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                    <option>Pria</option>
                    <option>Wanita</option>
                  </select>
                  <small class="text-danger"><?= form_error('jenis_kelamin'); ?></small>
                </div>
                <div class="form-group">
                  <label for="tempatlahir">Tempat Lahir :</label>
                  <div class="input-group colorpickerinput">
                    <div class="input-group-append">
                      <div class="input-group-text">
                        <i class="fas fa-fill-drip"></i>
                      </div>
                    </div>
                    <input type="text" class="form-control" name="tempatlahir" id="tempatlahir">
                  </div>
                  <small class="text-danger"><?= form_error('tempatlahir'); ?></small>
                </div>
                <div class="form-group">
                  <label for="tgl">Tanggal Lahir :</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fas fa-calendar"></i>
                      </div>
                    </div>
                    <input type="date" class="form-control daterange-cus" name="tgl" id="tgl">
                  </div>
                  <small class="text-danger"><?= form_error('tgl'); ?></small>
                </div>
                <div class="form-group">
                  <label for="agama">Agama :</label>
                  <input type="text" class="form-control" name="agama" id="agama">
                  <small class="text-danger"><?= form_error('agama'); ?></small>
                </div>
                <div class="form-group">
                  <label for="cita-cita">Cita-Cita :</label>
                  <input type="text" class="form-control" name="cita-cita" id="cita-cita">
                  <small class="text-danger"><?= form_error('cita-cita'); ?></small>
                </div>
                <div class="form-group">
                  <label for="hobby">Hobby :</label>
                  <input type="text" class="form-control" name="hobby" id="hobby">
                  <small class="text-danger"><?= form_error('hobby'); ?></small>
                </div>
                <div class="form-group">
                  <label for="kewarganegaraan">Kewarganegaraan :</label>
                  <input type="text" class="form-control" name="kewarganegaraan" id="kewarganegaraan">
                  <small class="text-danger"><?= form_error('kewarganegaraan'); ?></small>
                </div>
                <div class="form-group">
                  <label for="anak">Anak Ke :</label>
                  <input type="text" class="form-control" name="anak" id="anak">
                  <small class="text-danger"><?= form_error('anak'); ?></small>
                </div>
                <div class="form-group">
                  <label for="jumlah_saudara">Jumlah Saudara :</label>
                  <input type="text" class="form-control" name="jumlah_saudara" id="jumlah_saudara">
                  <small class="text-danger"><?= form_error('jumlah_saudara'); ?></small>
                </div>
                <div class="form-group">
                  <label for="bahasa">Bahasa Sehari-hari :</label>
                  <input type="text" class="form-control" name="bahasa" id="bahasa">
                  <small class="text-danger"><?= form_error('bahasa'); ?></small>
                </div>
                <div class="form-group">
                  <label for="sekolah_asal">Sekolah Asal :</label>
                  <input type="text" class="form-control" name="sekolah_asal" id="sekolah_asal">
                  <small class="text-danger"><?= form_error('sekolah_asal'); ?></small>
                </div>
                <div class="form-group">
                  <label for="no_hp">Nomor Handphone</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fas fa-phone"></i>
                      </div>
                    </div>
                    <input type="number" class="form-control phone-number" id="no_hp" name="no_hp">
                  </div>
                  <small class="text-danger"><?= form_error('no_hp'); ?></small>
                </div>
                <div class="form-group">
                  <label for="prestasi">Prestasi :</label>
                  <input type="text" class="form-control" name="prestasi" id="prestasi">
                  <small class="text-danger"><?= form_error('prestasi'); ?></small>
                </div>
                <div class="float-right mb-4">
                  <button class="btn btn-icon btn-left btn-success" type="submit"><i class="far fa-fw fa-user" style="margin-right:2px;"></i>Daftar</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>