<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>DayClean - Laporan Harian</title>

<?php $this->load->view('admin/res/lib'); ?>

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <?php $this->load->view('admin/res/sitebar'); ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

      <?php $this->load->view('admin/res/topnav'); ?>  

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Laporan Harian Admin</h1>
          </div>

          <!-- Content Row -->
          <div class="row ">
            <div class="col-lg-12">
              <!-- DataTales Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Laporan Harian</h6>
                  
                </div>

                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <span>Tanggal Order</span>
                      <div class="row">
                      <div class="col-sm-3">
                      <form action="<?php echo site_url('admin/laporan/')?>" method="post">
                      <div class="form-group">
                        
                      <input type="date" class="form-control" name="tanggal">
                        
                      </div>
                      </div>
                      <div class="col-sm-1"><button class="btn btn-success">Cari</button></div>
                      <div class="col-sm-1"><a href="<?php echo site_url('admin/laporan/cetak/'.$tanggal); ?>" class="btn btn-primary" target="_blank">Cetak</a></div>
                      </form>
                      </div>
                      <thead>
                        <tr>
                          <th>Invoice</th>
                          <th>Tgl. Order</th>
                          <th>Nama</th>
                          <th>No.Hp</th>
                          <th>Alamat</th>
                          <th>Jumlah</th>
                          <th>Status</th>
                          <th>Total</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                        foreach ($laporan_harian->result_array() as $m):
                              $invoice=$m['invoice'];
 
                              $tanggal=$m['tanggal'];

                              $nama_user=$m['nama_user'];

                              $no_hp=$m['no_hp'];

                              $alamat_user=$m['alamat_user'];                            

                              $jumlah_sepatu=$m['jumlah_sepatu'];

                              $status=$m['status'];

                              $total=$m['total'];

                        ?>
                        <tr>
                          <td><?php echo $invoice."<br>"; ?></td>
                          <td><?php echo $tanggal."<br>"; ?></td>
                          <td><?php echo $nama_user."<br>"; ?></td>
                          <td><?php echo $no_hp."<br>"; ?></td>
                          <td><?php echo $alamat_user."<br>"; ?></td>
                          <td><?php echo $jumlah_sepatu."<br>"; ?></td>
                          <td><?php echo $status."<br>"; ?></td>
                          <td><?php echo $total."<br>"; ?></td>
                        </tr>
                        <?php endforeach;?>
                        <tr>
                          <th colspan="7" >Total</th>
                          <td><?php echo $laporan_harian_sum->total_semua?></td>
                        </tr>
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <?php $this->load->view('admin/res/footer'); ?>

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ingin Log Out?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="<?php echo base_url('admin/clogin/logout'); ?>">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <?php $this->load->view('admin/res/script'); ?>

</body>

</html>
