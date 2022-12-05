 <!-- Main Content -->
<div class="main-content">
        <section class="section">
          <div class="section-header">
          <h1>Laboratorium Terpadu IAIN Bukittinggi</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="<?= base_url('Admin') ?>">Home</a></div>
              <div class="breadcrumb-item"><a href="<?= base_url($title) ?>"><?= $title ?></a></div>
              <div class="breadcrumb-item">Tambah <?= $title ?></div>
            </div>
          </div>

          <div class="section-body">
            <h2 class="section-title">Tambah Admin</h2>
            <p class="section-lead">Tambah data admin, halaman ini hanya khusus admin !</p>

            <div class="row">
              <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <div class="col-lg-12">
                      <?= validation_errors(); ?>
                    </div>
                  </div>
                  <div class="card-body">
                    <form action="<?= base_url('User/add_action/') ?>" method="post">
                      <div class="form-group">
                        <p>
                          <label for="nama">Nama</label>
                          <input type="text" name="nama" id="nama" value="<?= set_value('nama'); ?>" class="form-control">
                        </p>
                       
                      <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" value="<?= set_value('username'); ?>" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" value="<?= set_value('password'); ?>" class="form-control">
                      </div>
                      <div class="form-group">
                        <input type="hidden" name="role" value="1" class="form-control">
                      </div>
                      <input type="submit" name="simpan" class="btn btn-primary" value="Simpan">
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>