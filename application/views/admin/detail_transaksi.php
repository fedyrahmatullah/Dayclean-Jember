<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>DayClean - Transaksi</title>

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
            <h1 class="h3 mb-0 text-gray-800"> Detail Transaksi</h1>
          </div>

          <!-- Content Row -->
          <div class="row">
            <div class="col-lg-4">
                <div class="card shadow mb-4">
                  <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Data Transaksi</h6>
                  </div>
                  <div class="card-body">
                      <div class="col-lg-6">
                      <b>Invoice :</b>
                      <p><?php echo $data_transaksi->invoice?></p>
                      <b>Nama User :</b>
                      <p><?php echo $data_transaksi->nama_user?></p>
                      <b>Status :</b>
                      <p><?php echo $data_transaksi->status?></p>
                      </div>
                  </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card shadow mb-4">
                  <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Tambah Treatment</h6>
                  </div>
                  <div class="card-body">
                      <div class="col-lg-12">
                      <form action="<?php echo site_url('admin/transaksi/tambah_treatment/'.$invoice);?>" method="post">
                          <div class="form-group">
                            <select class="form-control" id="exampleFormControlSelect1" name="treatment" required>
                              <option value="">-- Pilih Treatment --</option>
                              <?php foreach ($treatment->result_array() as $row) { ?>
                              <option value="<?php echo $row['nama_treatment'];?>"><?php echo $row['nama_treatment'] ?> - Rp.<?php echo number_format($row['id_treatment']) ?></option>
                              <?php } ?>
                            </select>
                          </div>
                          <div class="form-group">
                              <input type="number" name="jumlah_sepatu" class="form-control" id="exampleFormControlInput1" placeholder="Jumlah">
                              <button class="btn btn-success btn-rounded mt-3" type="submit">Tambah</button>
                          </div>
                      </form>
                      </div>
                  </div>
                </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <!-- DataTales Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Tabel Detail Transaksi</h6>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>Invoice</th>
                          <th>Nama Treatment</th>
                          <th>Jumlah Sepatu</th>
                          <th>Total</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                        foreach ($data_detail->result_array() as $m):
                              $id_treatment=$m['id_treatment'];

                              $invoice=$m['invoice'];
 
                              $nama_treatment=$m['nama_treatment'];

                              $jumlah_sepatu=$m['jumlah_sepatu'];

                              $total=$m['total'];

                        ?>
                        <tr>
                          <td><?php echo $invoice."<br>"; ?></td>
                          <td><?php echo $nama_treatment."<br>"; ?></td>
                          <td><?php echo $jumlah_sepatu."<br>"; ?></td>
                          <td><?php echo $total."<br>"; ?></td>
                          <td>
                              <div class="row justify-content-center">
                                <a href="<?php echo site_url('admin/transaksi/hapus_treatment/'.$id_treatment.'/'.$invoice); ?>" class="btn btn-danger btn-circle"><i class="fas fa-info-circle">Hapus</i></a> &nbsp &nbsp 
                                
                              </div>
                          </td>
                        </tr>
                        <?php endforeach;?>
                      </tbody>
                      <tfoot>
                    <tr>
                      <tr>
                      <td colspan="2"><b>Total</b></td>
                      <form action="<?php echo site_url('admin/transaksi/simpan_total/'.$invoice);?>" method="post" >
                      <td>
                        <input type="text" name="total_sepatu" value="<?php echo $sum_total_sepatu->total_sepatu; ?>" readonly>
                      </td>
                      <td>
                        <input type="text" name="total_harga" value="<?php echo $sum_total->total_semua; ?>" readonly>
                      </td>
                      <td>
                        <button type="submit" class="btn btn-success">Simpan</button>
                      </td>
                      </form>
                    </tr>
                  </tfoot>
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

  <script type="text/javascript">
  function myFunction() {
  var x = document.getElementById("seePass");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
  </script>

</body>

</html>
