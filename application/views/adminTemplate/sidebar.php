<div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
          <img src="<?= base_url('assets/') ?>/img/logo.png" alt="logo" width="85" class="mb-5 mt-3">
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="#"><img src="<?= base_url('assets/') ?>/img/logo.png" alt="logo" width="50"></a>
          </div>
          <ul class="sidebar-menu mt-4">

              <?php if($this->session->userdata('role') == 1) : ?>

              <li class="menu-header">Admin Panel</li>
              <li><a class="nav-link" href="<?= base_url('Admin') ?>"><i class="fas fa-home"></i> <span>Dashboard</span></a></li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i><span>Master Data</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="<?= base_url('Dosen') ?>"><i class="far fa-square"></i> <span>Dosen</span></a></li>
                  <li><a class="nav-link" href="<?= base_url('Labor') ?>"><i class="far fa-square"></i> <span>Labor</span></a></li>
                  <li><a class="nav-link" href="<?= base_url('Pemakaian/data') ?>"><i class="far fa-square"></i> <span>Pemakaian</span></a></li>
                </ul>
              </li>
              
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-cog"></i><span>Pengaturan</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="<?= base_url('User') ?>"><i class="far fa-square"></i> User Management</a></li>
                </ul>
              </li>
              <li><a class="nav-link" href="<?= base_url('Laporan') ?>"><i class="fas fa-file-pdf"></i> <span> Laporan</span></a></li>

              <?php else : ?>

              <!-- Panel Dosen -->
              <li class="menu-header">Dosen Panel</li>
              <li><a class="nav-link" href="<?= base_url('Dosen/dashboard') ?>"><i class="fas fa-home"></i> <span>Dashboard</span></a></li>
              <li><a class="nav-link" href="<?= base_url('Pemakaian') ?>"><i class="fas fa-building"></i> <span>Pemakaian Labor</span></a></li>
              <li><a class="nav-link" href="<?= base_url('Laporan/dosen/'.$this->session->userdata('id_user')) ?>"><i class="fas fa-file-pdf"></i> <span> Laporan</span></a></li>


              <?php endif; ?>

            </ul>
        </aside>
      </div>