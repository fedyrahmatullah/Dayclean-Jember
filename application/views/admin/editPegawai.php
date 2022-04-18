<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>DayClean - Admin</title>

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
            <h1 class="h3 mb-0 text-gray-800">Data Admin</h1>
          </div>

          <!-- Content Row -->
          <div class="row">
            <div class="col-lg-12">
                <div class="card shadow mb-4">
                  <div class="card-header py-3">
                  </div>
                  <div class="card-body">
                    <div class="row justify-content-center">
                      <div class="col-lg-6">
                      <?php foreach($ubahpegawai as $row){?>
                        <form action="<?php echo base_url().'admin/pegawai/updatePegawai'; ?>" method="POST" enctype="multipart/form-data">
                          <div class="form-group row" hidden>
                            <label for="edit1" class="col-sm-2 col-form-label">ID Pegawai</label>
                              <div class="col-sm-10">
                                <input type="text" name="id_pegawai" class="form-control" value="<?php echo $row->id_pegawai ?>">
                              </div>
                          </div>
                          <div class="form-group row">
                            <label for="edit2" class="col-sm-2 col-form-label">Nama Pegawai</label>
                              <div class="col-sm-10">
                                <input type="text" name="nm_pegawai" class="form-control" value="<?php echo $row->nm_pegawai; ?>">
                              </div>
                          </div>
                          <div class="form-group row">
                            <label for="edit3" class="col-sm-2 col-form-label">Alamat Pegawai</label>
                              <div class="col-sm-10">
                                <input type="text" name="alamat_pegawai" class="form-control" value="<?php echo $row->alamat_pegawai; ?>">
                              </div>
                          </div>
                          <div class="form-group row">
                            <label for="edit4" class="col-sm-2 col-form-label">No. HP</label>
                              <div class="col-sm-10">
                                <input type="number" name="no_hp" class="form-control" value="<?php echo $row->no_hp; ?>">
                              </div>
                          </div>
                          <?php
                            if($this->session->userdata("level") == "superadmin"){
                          ?>
                          
                          <div class="form-group row">
                            <label for="edit5" class="col-sm-2 col-form-label">level</label>
                                  <select id="inputState" class="form-control" name="level" value="<?php echo $row->level; ?>">
                                      <option selected>Pilih Level</option>
                                      <option>superadmin</option>
                                      <option>pegawai</option>
                                  </select>
                          </div>
                          <?php
                            }else{?>
                              <div class="form-group row">
                                <label for="edit5" class="col-sm-2 col-form-label">level</label>
                                      <select id="inputState" class="form-control" name="level" value="<?php echo $row->level; ?>">
                                          <option selected>Pilih Level</option>
                                          <option>pegawai</option>
                                      </select>
                              </div>

                            <?php }
                          ?>
                          <div class="form-group row">
                            <label for="edit6" class="col-sm-2 col-form-label">Username</label>
                              <div class="col-sm-10">
                                <input type="text" name="username" class="form-control" value="<?php echo $row->username; ?>">
                              </div>
                          </div>

                          <div class="row justify-content-center">
                            <a href="<?php echo base_url('admin/pegawai/editpass/'.$row->id_pegawai); ?>"  class="btn btn-primary mr-3">Ganti Password</a>
                            <button type="submit" class="btn btn-success" value="simpan" name="save">Simpan</button>   
                          </div>
                          
                        </form>
                        <?php } ?>
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
