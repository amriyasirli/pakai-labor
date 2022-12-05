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
                    <form action="<?= base_url('Labor/update/'.$labor->id_labor) ?>" method="post">
                      <div class="form-group">
                        <label for="ruangan">Ruangan</label>
                        <input type="text" id="ruangan" name="ruangan" value="<?= $labor->ruangan?>" class="form-control">
                      </div>
                      <div class="form-group" id="input_fields_wrap_edit">
                        <label for="alat">Nama Alat dan Jumlah</label>
                          <?php
                            $data = $this->db->get_where('alat', ['id_labor' => $labor->id_alat])->result();
                            foreach ($data as $row) :
                              ?>
                              <div class="row module_edit">
                                <input type="text" name="nama_alat[]" value="<?= $row->nama_alat?>" placeholder="Nama alat" class="form-control col-lg-3 mt-2 ml-3 mr-2" required />
                                <input type="number" name="jumlah[]" value="<?= $row->jumlah?>" placeholder="Jumlah (unit)" class="form-control col-lg-2 mt-2 mr-2" required>
                                &nbsp;<a href="#" class="remove_field_edit btn btn-danger mt-2"><i class="fas fa-times"></i></a>
                              </div>
                          <?php endforeach; ?>
                      </div>
                      <div class="col-lg-12 mb-5" id="input_fields_wrap">
                          <button id="btn_add_field" class="btn btn-success mb-3"><i class="fas fa-plus"></i> Tambah Alat</button>                           
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