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
                    <a href="<?= base_url('User/add')?>" class="btn btn-primary mr-2"><i class="fas fa-plus"></i> Tambah Admin</a>
                    <a href="<?= base_url('Dosen/add')?>" class="btn btn-success"><i class="fas fa-plus"></i> Tambah Dosen</a>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered" id="table">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Role</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                              $no = 1;
                              foreach ($user as $row) :
                          ?> 
                              <tr>
                              <td><?= $no++; ?></td>
                              <td><?= $row->nama; ?></td>
                              <td><?= $row->username; ?></td>
                              <td>
                                <span class="badge badge-<?= $row->role == 1 ? 'primary' : 'success' ?>"><?= $row->role == 1 ? 'Admin' : 'Dosen' ?></span>
                              </td>
                              <td>
                                  <!-- <a href="<?= base_url('User/changePassword/'.$row->id_user)?>" class="btn btn-warning"><i class="fas fa-shield-alt"></i></a> -->
                                  <a href="<?= base_url('User/update_view/'.$row->id_user)?>" class="btn btn-info"><i class="fas fa-edit"></i></a>
                                  <a href="#" data-toggle="modal" data-target="#modelId<?= $row->id_user ?>" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                  
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

      <?php foreach ($user as $row) : ?>
      <!-- Modal -->
      <div class="modal fade" id="modelId<?= $row->id_user ?>" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Hapus <?= $title ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <span>Anda yakin hapus data <?= $title ?> <b class="text-danger"><?= $row->nama; ?></b> ?</span>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <a href="<?= base_url('User/delete/'.$row->id_user)?>" class="btn btn-danger">Hapus</a>
            </div>
          </div>
        </div>
      </div>

      <?php endforeach; ?>
