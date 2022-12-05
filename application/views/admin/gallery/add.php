<!-- Main Content -->
<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Tambah <?= $title ?></h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="<?= base_url('Admin') ?>">Home</a></div>
              <div class="breadcrumb-item"><a href="<?= base_url($title) ?>"><?= $title ?></a></div>
              <div class="breadcrumb-item">Tambah <?= $title ?></div>
            </div>
          </div>

          <div class="section-body">
            <h2 class="section-title">Tambah <?= $title ?></h2>
            <p class="section-lead">Tambah data <?= $title ?>, data pada display informasi akan otomatis juga terubah</p>

            <div class="row">
              <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                  </div>
                  <div class="card-body">
                    <form method='post' action='<?= base_url('Gallery/add_action/'); ?>' enctype='multipart/form-data'>
                      <div class="form-group">
                        <label>Foto</label>
                        <input type="file" name="files[]" class="form-control" multiple="multiple">
                        <small class="form-text text-danger">Tambahkan 1 atau banyak foto sekaligus !</small>
                      </div>
                      <!-- <button type="submit" class="btn btn-primary">Simpan</button> -->
                      <input type='submit' value='Upload' class="btn btn-primary" name='upload' />
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>