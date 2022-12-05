<!-- Main Content -->
<div class="main-content">
        <section class="section">
          <div class="section-header">
          <h1>Laboratorium Terpadu IAIN Bukittinggi</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="<?= base_url('Admin') ?>">Home</a></div>
              <div class="breadcrumb-item"><a href="<?= base_url($title) ?>"><?= $title ?></a></div>
              <div class="breadcrumb-item">Cetak Laporan</div>
            </div>
          </div>

          <div class="section-body">
            <h2 class="section-title">Cetak Laporan Pemakaian</h2>
            <!-- <p class="section-lead">Ubah data <?= $title ?>, hanya khusus admin !</p> -->

            <div class="row">
              <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                  </div>
                  <div class="card-body">
                    <form action="<?= base_url('Laporan/printPDF') ?>" method="post">
                      <div class="form-group col-lg-4">
                        <label for="">Pilih Tanggal</label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <div class="input-group-text">
                              <i class="fas fa-calendar"></i>
                            </div>
                          </div>
                          <input type="text" name="daterange" id="" class="form-control daterange-cus">
                        </div>
                        <small id="helpId" class="form-text text-muted">Atur tanggal untuk download laporan</small>
                        <div class="form-group mt-3">
                          <label for="status">Pilih Status Pemakaian</label>
                          <select class="form-control" name="status" id="status">
                            <option value="all">Semua Data</option>
                            <option value="0">Dipakai</option>
                            <option value="1">Sebelum</option>
                            <option value="2">Sesudah</option>
                          </select>
                        </div>
                      </div>
                      <button type="submit" class="btn btn-primary">Download</button>
                    </form>
                  </div>                  
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
