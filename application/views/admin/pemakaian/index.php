<!-- Main Content -->
<div class="main-content">
        <section class="section">
          <div class="section-header">
          <h1>Laboratorium Terpadu IAIN Bukittinggi</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="<?= base_url('Admin') ?>">Home</a></div>
              <div class="breadcrumb-item"><a href="<?= base_url($title) ?>"><?= $title ?></a></div>
              <div class="breadcrumb-item">Data <?= $title ?></div>
            </div>
          </div>

          <div class="section-body">
            <h2 class="section-title">Data <?= $title ?></h2>
            <p class="section-lead">Data <?= $title ?> Laboratorium Terpadu IAIN Bukittinggi</p>

            <div class="row">
              <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <!-- <a href="<?= base_url('Pemakaian/add')?>" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah</a> -->
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-striped" id="table">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Status</th>
                          <th>Nama</th>
                          <th>Ruangan</th>
                          <th>Waktu</th>
                          <th>Tanggal</th>
                          <th>Keterangan</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                            $no = 1;
                            foreach ($pemakaian as $row) :
                        ?> 
                            <tr>
                            <td><?= $no++; ?></td>
                            <td>
                              <span class="badge badge-<?= $row->status == 0 ? 'warning' : ($row->status == 1 ? 'secondary' : 'success') ?>">
                                <?= $row->status == 0 ? 'Dipakai' : ($row->status == 1 ? '<span class="text-dark">Sebelum</span>' : 'Sesudah') ?>
                              </span>
                            </td>
                            <td><?= $row->nama_dosen; ?></td>
                            <td><?= $row->ruangan; ?></td>
                            <td><?= $row->waktu; ?></td>
                            <td><?= $row->pemakaian_created; ?></td>
                            <td><?= $row->keterangan; ?></td>
                            </tr>
                            

                        <?php endforeach; ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <!-- <div class="card-footer text-right">
                    <nav class="d-inline-block">
                      <ul class="pagination mb-0">
                        <li class="page-item disabled">
                          <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                        <li class="page-item">
                          <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                          <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                        </li>
                      </ul>
                    </nav>
                  </div> -->
                  <!-- Button trigger modal -->

                  
                  
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>

      <?php foreach ($pemakaian as $row) : ?>
      <!-- Modal -->
      <div class="modal fade" id="modelId<?= $row->id ?>" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Hapus <?= $title ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <span>Anda yakin hapus data <?= $title ?> <b class="text-danger"><?= $row->nama_dosen; ?></b> ?</span>
            <span>menghapus data sekaligus akan menghapus data akun bersangkutan </span>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <a href="<?= base_url('Dosen/delete/'.$row->id_dosen)?>" class="btn btn-danger">Hapus</a>
            </div>
          </div>
        </div>
      </div>

      <?php endforeach; ?>