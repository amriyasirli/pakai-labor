<!-- Main Content -->
<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Ubah <?= $title ?></h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?= base_url('Admin') ?>">Home</a></div>
                <div class="breadcrumb-item"><a href="<?= base_url($title) ?>"><?= $title ?></a></div>
                <div class="breadcrumb-item">Ubah <?= $title ?></div>
            </div>
          </div>

          <div class="section-body">
            <h2 class="section-title">Ubah <?= $title ?></h2>
            <p class="section-lead">Ubah data <?= $title ?>, data pada display informasi akan otomatis juga terubah</p>

            <div class="row">
              <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                  </div>
                  <div class="card-body">
                    <?= form_open_multipart('Gallery/update/'.$gallery->id) ?>
                      <div class="form-group">
                        <label>Foto</label> <br>
                        <img src="<?= base_url('assets/img/sekolah/'.$gallery->foto) ?>" width="150" class="p-2" alt="">
                        <input type="hidden" name="fotolama" value="<?= $gallery->foto?>">
                        <input type="file" name="foto" value="<?= $gallery->foto?>" class="form-control">
                      </div>
                      <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    <?= form_close(); ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>