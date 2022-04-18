<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>DayClean - Tambah Treatment</title>

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
            <h1 class="h3 mb-0 text-gray-800">Tambah Treatment</h1>
          </div>

          <!-- Content Row -->
          <div class="row">
            <div class="col-lg-12">
                <div class="card shadow mb-4">
                  <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Tambahkan Treatment dibawah ini.</h6>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-lg-6">
                      <form action="<?php  echo base_url('admin/treatment/tambahTreatment'); ?>" method="POST" enctype="multipart/form-data">
                          <div class="form-group">
                              <label for="exampleFormControlInput1">Jenis Treatment</label>
                              <input type="text" name="namatreatment" class="form-control" id="exampleFormControlInput1" placeholder="" required>
                          </div>
                          <div class="form-group">
                              <label for="exampleFormControlInput1">Deskripsi</label>
                              <textarea name="deskripsi" class="form-control" rows="5" required></textarea>
                          </div>
                          <div class="form-group">
                              <label for="exampleFormControlInput1">Harga</label>
                              <input type="text" name="harga" class="form-control" id="exampleFormControlInput1" placeholder="" required>
                          </div>
                          <div class="row justify-content-center">
                          <a href="<?php echo base_url('admin/treatment'); ?>" class="btn btn-danger btn-rounded mr-3 mt-2">Batal</a>
                          <button type="submit" class="btn btn-success btn-rounded mt-2">Simpan</button>
                          </div>
                      </form>
                      </div>
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
