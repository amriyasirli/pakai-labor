
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1><?= $title?></h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="<?= base_url('Admin/') ?>">Dashboard</a></div>
              <div class="breadcrumb-item"><?= $title?></div>
            </div>
          </div>

          <div class="section-body">
            <h2 class="section-title"><?= $deskripsi; ?></h2>
            <!-- <p class="section-lead">Halaman ini merupakan halaman admin.</p> -->
            <div class="card">
                  <div class="card-header">
                    <h4>Atur style tampilan display informasi</h4>
                      <div class="card-header-action">
                        <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#modelId">
                        <i class="fas fa-clock"></i> Atur timer 
                      </button>
                    </div>
                    <!-- Button trigger modal -->
                  </div>
                </div>
          </div>
        </section>
      </div>
