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
            <p class="section-lead">Tambah data <?= $title ?>, hanya khusus admin !</p>

            <div class="row">
              <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                  </div>
                  <div class="card-body">
                    <form action="<?= base_url('Labor/add_action/') ?>" method="post">
                      <div class="form-group">
                        <label for="ruangan">Ruangan</label>
                        <input type="text" name="ruangan" id="ruangan" class="form-control">
                      </div>
                      <div class="col-lg-12 mb-5" id="input_fields_wrap">
                          <button id="btn_add_field" class="btn btn-success mb-3"><i class="fas fa-plus"></i> Tambah Alat</button>                           
                      </div>
                      <input type="submit" name="simpan" class="btn btn-primary" id="active" disabled value="Simpan">
                    </form>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>

      <!-- <html>
<head>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script type="text/javascript" src="js/jquery.serialize-object.min.js"></script>
    <style>
        * box-sizing {border-box}
        body {background-color: tan}
        .module {margin: 2px; padding-bottom: 0.3rem}
    </style>
</head>
<body>
    
</body>
</html> -->


