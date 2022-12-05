
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1><?= $title?></h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="<?= base_url('Admin/') ?>">Admin</a></div>
              <div class="breadcrumb-item"><?= $title?></div>
            </div>
          </div>

          <div class="section-body">
            <h2 class="section-title"><?= $deskripsi; ?></h2>
            <!-- <p class="section-lead">Halaman ini merupakan halaman admin.</p> -->
            <div class="row">
              <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                  <div class="card-icon bg-primary">
                    <i class="fas fa-building"></i>
                  </div>
                  <div class="card-wrap">
                    <div class="card-header">
                      <h4>Ruangan</h4>
                    </div>
                    <div class="card-body">
                    <?= $ruangan?>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                  <div class="card-icon bg-danger">
                    <i class="fas fa-user-tie"></i>
                  </div>
                  <div class="card-wrap">
                    <div class="card-header">
                      <h4>Dosen</h4>
                    </div>
                    <div class="card-body">
                    <?= $dosen?>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                  <div class="card-icon bg-warning">
                    <i class="fas fa-key"></i>
                  </div>
                  <div class="card-wrap">
                    <div class="card-header">
                      <h4>Dipakai</h4>
                    </div>
                    <div class="card-body">
                    <?= $pakai?>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                  <div class="card-icon bg-success">
                    <i class="fas fa-laptop"></i>
                  </div>
                  <div class="card-wrap">
                    <div class="card-header">
                      <h4>Total Alat</h4>
                    </div>
                    <div class="card-body">
                    <?= $alat[0]->jumlah;?> unit
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-8">
                <div class="card">
                  <div class="card-header">
                    <h4>List pemakaian labor</h4>
                      <div class="card-header-action">
                        <button type="button" class="btn btn-danger btn-lg"></button>
                      </div>
                    <!-- Button trigger modal -->
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>Status</th>
                            <th>Nama</th>
                            <th>Ruangan</th>
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
                              <td>
                                <span class="badge badge-<?= $row->status == 0 ? 'warning' : ($row->status == 1 ? 'secondary' : 'success') ?>">
                                  <?= $row->status == 0 ? 'Dipakai' : ($row->status == 1 ? '<span class="text-dark">Sebelum</span>' : 'Sesudah') ?>
                                </span>
                              </td>
                              <td><?= $row->nama_dosen; ?></td>
                              <td><?= $row->ruangan; ?></td>
                              <td><?= $row->pemakaian_created; ?></td>
                              <td><?= $row->keterangan; ?></td>
                            </tr>
                          <?php endforeach; ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-4 col-md-4 col-lg-4">
                <div class="pricing pricing-highlight">
                  <div class="pricing-title">
                    Total Keseluruhan
                  </div>
                  <div class="pricing-padding">
                    <div class="pricing-price">
                      <div><?= $sesudah; ?> kali</div>
                      <div>Pemakaian</div>
                    </div>
                    <div class="pricing-details">
                      <div class="pricing-item">
                        <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                        <div class="pricing-item-label"><?= $dipakai; ?> sedang dipakai</div>
                      </div>
                      <div class="pricing-item">
                        <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                        <div class="pricing-item-label"><?= $sebelum; ?> sebelum penggunaan</div>
                      </div>
                      <div class="pricing-item">
                        <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                        <div class="pricing-item-label"><?= $sesudah; ?> sesudah penggunaan</div>
                      </div>
                  </div>
                  <div class="pricing-cta">
                    <a href="<?= base_url('Pemakaian/data') ?>">More <i class="fas fa-arrow-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
