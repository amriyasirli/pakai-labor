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
            <p class="section-lead">Ubah data <?= $title ?>, hanya khusus admin !</p>

            <div class="row">
              <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <a href="<?= base_url('Dosen/add')?>" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah</a>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered" id="table">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>NIDN</th>
                            <th>Jenis Kelamin</th>
                            <th>No. HP</th>
                            <th>Terdaftar</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                              $no = 1;
                              foreach ($dosen as $row) :
                          ?> 
                              <tr>
                              <td><?= $no++; ?></td>
                              <td><?= $row->nama_dosen; ?></td>
                              <td><?= $row->nidn; ?></td>
                              <td><?= $row->jenis_kelamin; ?></td>
                              <td><?= $row->hp; ?></td>
                              <td><?= $row->data_created; ?></td>
                              <td>
                                  <a href="<?= base_url('Dosen/update_view/'.$row->id_dosen)?>" class="btn btn-info"><i class="fas fa-edit"></i></a>
                                  <a href="#" data-toggle="modal" data-target="#modelId<?= $row->id_dosen ?>" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                  
                              </td>
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

      <?php foreach ($dosen as $row) : ?>
      <!-- Modal -->
      <div class="modal fade" id="modelId<?= $row->id_dosen ?>" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
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