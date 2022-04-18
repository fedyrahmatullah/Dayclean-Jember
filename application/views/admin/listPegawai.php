<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>DayClean - List Admin</title>

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


          <div class="row">
            <div class="col-lg-12">
                <div class="card shadow mb-4">
                  <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Mengelolah Data Admin</h6>
                  </div>
                  <div class="card-body">
                      <div class="col-lg-6">
                      <form>
                          <a href="<?php echo base_url('admin/pegawai/tambahPegawai') ?>" class="btn btn-success btn-rounded">Tambah Admin</a>
                      </form>
                      </div>
                  </div>
                </div>
            </div>
          </div>
          <!-- Content Row -->
          <div class="row ">
            <div class="col-lg-12">
              <!-- DataTales Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Tabel Admin</h6>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>Id Admin</th>
                          <th>Nama Admin</th>
                          <th>Alamat</th>
                          <th>No. Telepon</th>
                          <th>Level</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                        foreach ($listpegawai->result_array() as $m):
                              $id_pegawai=$m['id_pegawai'];

                              $nm_pegawai=$m['nm_pegawai'];

                              $alamat_pegawai=$m['alamat_pegawai'];

                              $no_hp=$m['no_hp'];

                              $level=$m['level'];


                        ?>
                        <tr>
                          <td><?php echo $id_pegawai."<br>"; ?></td>
                          <td><?php echo $nm_pegawai."<br>"; ?></td>
                          <td><?php echo $alamat_pegawai."<br>"; ?></td>
                          <td><?php echo $no_hp."<br>"; ?></td>
                          <td><?php echo $level."<br>"; ?></td>
                          <td>
                              <div class="row justify-content-center">
                                <a href="<?php echo base_url('admin/pegawai/editPegawai/'.$id_pegawai); ?>" class="btn btn-info btn-circle"><i class="fas fa-info-circle"></i></a> &nbsp &nbsp 
                                <a data-toggle="modal" data-target="#deleteModal<?php echo $id_pegawai?>" href="#" class="btn btn-danger btn-circle"><i class="fas fa-trash"></i></a>
                              </div>
                          </td>
                          
                        </tr>
                        <div class="modal fade" id="deleteModal<?php echo $id_pegawai?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Anda ingin Hapus Data?</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">×</span>
                                </button>
                              </div>
                              <div class="modal-body">Pilih "Hapus" Bila Ingin Menghapus Data.</div>
                              <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                                <a class="btn btn-primary" href="<?php echo base_url('admin/pegawai/hapusPegawai/'.$id_pegawai) ?>">Hapus</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        
                        <?php endforeach;?>
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
