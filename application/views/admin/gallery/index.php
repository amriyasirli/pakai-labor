<!-- Main Content -->
<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>List Data <?= $title ?></h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="<?= base_url('Admin') ?>">Home</a></div>
              <div class="breadcrumb-item"><a href="<?= base_url($title) ?>"><?= $title ?></a></div>
              <div class="breadcrumb-item">List Data <?= $title ?></div>
            </div>
          </div>

          <div class="section-body">
            <h2 class="section-title">List Data <?= $title ?></h2>
            <p class="section-lead">Ubah data <?= $title ?>, data pada display informasi akan otomatis juga terubah.</p>

            <div class="row">
              <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <a href="<?= base_url('Gallery/add')?>" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah</a>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-md">
                        <tr>
                          <th>No</th>
                          <th>Foto Gallery</th>
                          <th>Action</th>
                        </tr>
                        <?php
                            $no = 1;
                            foreach ($gallery as $row) :
                        ?> 
                            <tr>
                            <td><?= $no++; ?></td>
                            <td><img src="<?= base_url('assets/img/sekolah/'.$row->foto) ?>" width="80" class="p-1" alt=""></td>
                            <td>
                                <a href="<?= base_url('Gallery/update_view/'.$row->id)?>" class="btn btn-info">Update</a>
                                <a href="<?= base_url('Gallery/delete/'.$row->id)?>" class="btn btn-danger">Delete</a>
                            </td>
                            </tr>

                        <?php endforeach; ?>

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
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>