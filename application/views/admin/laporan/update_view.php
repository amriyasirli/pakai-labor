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
                  </div>
                  <div class="card-body">
                    <form action="<?= base_url('Dosen/update/'.$dosen->id_dosen) ?>" method="post">
                      <div class="form-group">
                        <label>Nama Dosen</label>
                        <input type="text" name="nama_dosen" value="<?= $dosen->nama_dosen?>" class="form-control">
                      </div>
                      <div class="form-group">
                        <label>NIDN</label>
                        <input type="text" name="nidn" value="<?= $dosen->nidn?>" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select class="form-control" name="jenis_kelamin" id="jenis_kelamin" required>
                          <option value="<?= $dosen->jenis_kelamin?>"><?= $dosen->jenis_kelamin?></option>
                          <option value="" disabled>- Pilih Jenis Kelamin -</option>
                          <option value="Laki-Laki">Laki-Laki</option>
                          <option value="Perempuan">Perempuan</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Nomor HP</label>
                        <input type="text" name="hp" value="<?= $dosen->hp?>" class="form-control">
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