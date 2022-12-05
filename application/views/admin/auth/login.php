
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title><?= $title; ?> &mdash; Laboratorium Terpadu IAIN Bukittinggi</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="<?= base_url('assets/admin/') ?>/node_modules/bootstrap-social/bootstrap-social.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?= base_url('assets/admin/') ?>/css/style.css">
  <link rel="stylesheet" href="<?= base_url('assets/admin/') ?>/css/components.css">
</head>

<body>
  <div id="app">
    <section class="section">
      <div class="d-flex flex-wrap align-items-stretch">
        <div class="col-lg-4 col-md-6 col-12 order-lg-1 min-vh-100 order-2 bg-white">
          <div class="p-2 m-3">
            <center><img src="<?= base_url('assets/') ?>/img/logo.png" alt="logo" width="150" class="shadow-light mb-5 mt-2"></center>
            <!-- <h4 class="text-dark font-weight-normal"> <span class="font-weight-bold">MAN 1 Padangsidimpuan</span></h4> -->
            <p class="text-muted">Selamat Datang di Sistem Informasi Pengelolaan <b>Laboratorium Terpadu IAIN Bukittinggi</b></p>
            
            <?= $this->session->flashdata('pesan') ?>
            <form method="post" action="<?= base_url('Auth')?>" class="needs-validation" novalidate="">
              <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" tabindex="1" required autofocus>
                <div class="">
                <?= form_error('username') ?>
                </div>
              </div>

              <div class="form-group">
                <div class="d-block">
                  <label for="password" class="control-label">Password</label>
                </div>
                <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                <div class="">
                <?= form_error('password') ?>
                </div>
              </div>

              <div class="form-group text-right">
                <button type="submit" class="btn btn-primary btn-lg btn-icon icon-right" tabindex="4">
                  Login
                </button>
              </div>

            </form>

            <div class="text-center mt-5 text-small">
              &copy; <?= date('Y'); ?> Laboratorium Terpadu IAIN Bukittinggi. <br>Made with 💙 by Rival Fauzi
            </div>
          </div>
        </div>
        <div class="col-lg-8 col-12 order-lg-2 order-1 min-vh-100 background-walk-y position-relative overlay-gradient-bottom" data-background="https://iainbukittinggi.ac.id/wp-content/uploads/2021/09/WhatsApp-Image-2021-09-16-at-13.40.36-1024x682.jpeg">
          <div class="absolute-bottom-left index-2">
            <div class="text-light p-5 pb-2">
              <div class="mb-5 pb-3">
                <h1 class="mb-2 display-4 font-weight-bold text-white">Selamat Datang</h1>
                <h5 class="font-weight-normal text-muted-transparent text-white">Sistem Informasi Pengelolaan Laboratorium Terpadu IAIN Bukittinggi</h5>
              </div>
              Photo by <a class="text-light bb" target="_blank" href="#">Rival Fauzi</a> 
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="<?= base_url('assets/admin/') ?>/js/stisla.js"></script>

  <!-- JS Libraies -->

  <!-- Template JS File -->
  <script src="<?= base_url('assets/admin/') ?>/js/scripts.js"></script>
  <script src="<?= base_url('assets/admin/') ?>/js/custom.js"></script>

  <!-- Page Specific JS File -->
</body>
</html>
