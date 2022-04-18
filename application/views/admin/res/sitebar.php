<!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('admin/Home') ?>">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">DayClean Jember</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('admin/Home') ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading" style="color:white">
        MENU
      </div>


      <li class="nav-item">
        <?php echo $this->session->userdata("id_pegawai"); ?>
        <a class="nav-link" href="<?php echo base_url('admin/pegawai/editPegawai/'.$this->session->userdata("id_pegawai")); ?>">
          <i class="fas fa-fw fa-table"></i>
          <span>Data Admin</span></a>
      </li>
      <?php
           if($this->session->userdata("level") == "superadmin"){
      ?>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('admin/pegawai') ?>">
          <i class="fas fa-fw fa-table"></i>
          <span>List Admin</span></a>
      </li>
      <?php
             }
      ?>



      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading" style="color:white">
        SEMUA TABEL
      </div>

      <!-- Nav Item - Tabel -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('admin/treatment') ?>">
          <i class="fas fa-fw fa-table"></i>
          <span>Tabel Treatment</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('admin/transaksi') ?>">
          <i class="fas fa-fw fa-table"></i>
          <span>Tabel Transaksi</span></a>
      </li>
      
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Heading -->
      <div class="sidebar-heading" style="color:white">
        LAPORAN
      </div>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('admin/laporan') ?>">
          <i class="fas fa-fw fa-table"></i>
          <span>Laporan Harian</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('admin/laporan/bulanan') ?>">
          <i class="fas fa-fw fa-table"></i>
          <span>Laporan Bulanan</span></a>
      </li>


      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->