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
            <h2 class="section-title">Tambah <?= $title ?></h2>
            <!-- <p class="section-lead">Tambah data <?= $title ?>, hanya khusus admin !</p> -->

            <div class="row">
              <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                  </div>
                  <div class="card-body">
                    <form action="<?= base_url('Pemakaian/add_action/') ?>" method="post">
                      <div class="form-group">
                        <label for="id_labor">Ruangan</label>
                        <select class="form-control" name="id_labor" id="id_labor" required>
                          <option value="">- Pilih -</option>
                          <?php
                            $data = $this->db->get('data_labor')->result();
                            foreach ($data as $row) :
                          ?>
                            
                            <option value="<?= $row->id_labor; ?>" <?= $row->status_labor == 1 ? 'disabled' : '' ?>><?= $row->ruangan; ?> <?= $row->status_labor == 1 ? '(dipakai)' : '' ?></option>
                            
                          <?php endforeach; ?>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="">Waktu Pemakaian</label>
                        <div class="row">
                          <div class="col-sm-2">
                            <input type="time" class="form-control" name="waktu[]" id="" aria-describedby="helpId" placeholder="">
                          </div>
                          <div class="col-sm-1 text-center mt-3">
                              <h6>s/d</h6>
                          </div>
                          <div class="col-sm-2">
                            <input type="time" class="form-control" name="waktu[]" id="" aria-describedby="helpId" placeholder="">
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="form-group">
                          <label for="keterangan">Keterangan</label>
                          <textarea class="form-control" name="keterangan" id="summernote2" rows="5" required></textarea>
                        </div>
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