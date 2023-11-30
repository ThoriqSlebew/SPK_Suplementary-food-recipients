  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <base href="<?= base_url("assets") ?>/">
    <a href="../../index.php" class="brand-link">
      <img src="dist/img/logomalang.png" alt="Apps Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">PEMKOT Malang</span>
    </a>

    
    
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="<?php echo base_url('/viewmebel'); ?>" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Master Data
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">4</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo site_url('Home/callviewjenisusaha');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Alternatif</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo site_url('Home/callviewdatakriteria');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Kriteria</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo site_url('Home/callviewdataumkm');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Nilai Kriteria</p>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-item">
            <a href="<?php echo site_url('Home/callviewhitung');?>" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
              Nilai Max/Min
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo site_url('Home/callviewnormalisasi');?>" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
              Hitung Normalisasi
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo site_url('Home/callviewranking');?>" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
              Hitung Perangkingan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo site_url('Home/callviewkeputusan');?>" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
              Hasil Keputusan
              </p>
            </a>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>