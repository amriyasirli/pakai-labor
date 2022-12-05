<!-- Main Content -->
<div class="main-content">
        <section class="section">
          <div class="section-header">
          <h1>Laboratorium Terpadu IAIN Bukittinggi</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?= base_url('Admin') ?>">Home</a></div>
                <div class="breadcrumb-item"><a href="<?= base_url($title) ?>"><?= $title ?></a></div>
                <div class="breadcrumb-item">Ubah <?= $title ?></div>
            </div>
          </div>

          <div class="section-body">
            <h2 class="section-title">Ubah <?= $title ?></h2>
            <p class="section-lead">Ubah data <?= $title ?>, hanya khusus admin !</p>

            <div class="row">
              <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <div class="col-lg-12">
                      <?= $this->session->flashdata('warning'); ?>
                    </div>
                  </div>
                  <div class="card-body">
                    <form action="<?= base_url('User/update/'.$user->id_user) ?>" method="post">
                      <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" id="nama" name="nama" value="<?= $user->nama?>" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" disabled id="username" name="username" value="<?= $user->username?>" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="password">Password (Terenkripsi)</label>
                        <input type="password" id="password" name="password" placeholder="<?= $user->password?>" class="form-control" required>
                        <small id="password" class="form-text text-warning">Wajib masukkan password untuk update akun !</small>
                      </div>
                      <div class="form-group">
                        <label for="role">Role</label>
                        <select class="form-control" name="role" id="role" required>
                          <option value="<?= $user->role?>" class="text-<?= $user->role == 1 ? 'primary' : 'success' ?>"><?= $user->role == 1 ? 'Administrator' : 'Dosen' ?></option>
                          <option disabled>- Pilih -</option>
                          <option class="text-primary" value="1">Administrator</option>
                          <option class="text-success" value="2">Dosen</option>
                        </select>
                      </div>
                      <input type="submit" name="simpan" class="btn btn-primary" value="Simpan Perubahan">
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>