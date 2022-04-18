<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>DayClean Jember - HOME</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

<!-- LIBRARY CSS -->

<?php $this->load->view('user/res/lib'); ?>

  <!-- =======================================================
    Theme Name: eBusiness
    Theme URL: https://bootstrapmade.com/ebusiness-bootstrap-corporate-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body data-spy="scroll" data-target="#navbar-example">

  <div id="preloader"></div>

  <header>
    <!-- header-area start -->
    <div id="sticker" class="header-area">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">

            <!-- Navigation -->
            <nav class="navbar navbar-default">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
                <!-- Brand -->
                <a class="navbar-brand page-scroll sticky-logo" href="<?php echo base_url('user/home') ?>">
                  <h1><span>Day</span>Clean</h1>
                  <!-- Uncomment below if you prefer to use an image logo -->
                  <!-- <img src="img/logo.png" alt="" title=""> -->
								</a>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
                <ul class="nav navbar-nav navbar-right">
                  <li>
                    <a class="page-scroll" href="<?php echo base_url('user/home') ?>">Beranda</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="<?php echo base_url('user/transaksi') ?>">ORDER NOW!!</a>
                  </li>
                </ul>
              </div>
              <!-- navbar-collapse -->
            </nav>
            <!-- END: Navigation -->
          </div>
        </div>
      </div>
    </div>
    <!-- header-area end -->
  </header>
  <!-- header end -->

  <!-- Start About area -->
  <div class="about-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>ORDER SEKARANG!</h2>
          </div>
        </div>
      </div>
      <div class="row">
          <div class="col-sm-6 col-md-offset-3">
            <form action="<?php echo site_url('user/transaksi/tambah_treatment/'.$invoice.'/'.$nama);?>" method="post" >
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Treatment</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="treatment" required>
                      <option value="">-- Pilih Treatment --</option>
                      <?php foreach ($treatment->result_array() as $row) { ?>
                      <option value="<?php echo $row['nama_treatment'];?>"><?php echo $row['nama_treatment'] ?> - Rp.<?php echo number_format($row['harga']) ?></option>
                      <?php } ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">Jumlah Sepatu</label>
                    <input type="text" name="jumlah_sepatu" class="form-control" id="exampleFormControlInput1" placeholder="" required>
                </div>
                <div class="row ">
                <button type="submit" style="float: right;" class="btn btn-primary btn-rounded">Tambah Sepatu</button>
                </div>
                </form>
                <div class="row table-responsive">
                  <table class="table table-borderless">
                  <thead>
                    <tr>
                      <th>Nama Tretment</th>
                      <th>Jumlah Sepatu</th>
                      <th>Total</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($detail_sepatu->result_array() as $row){ $id_treatment=$row['id_treatment']
                      ?>
                    <tr> 
                      <td><?php echo $row['nama_treatment'] ?></td>
                      <td><?php echo $row['jumlah_sepatu'] ?> </td>
                      <td>Rp.<?php echo number_format($row['total']) ?> </td>
                      <td>
                          <a href="<?php echo site_url('user/transaksi/hapus_treatment/'.$id_treatment.'/'.$invoice.'/'.$nama); ?>" class="btn btn-danger">Hapus</a>
                      </td>
                    </tr>
                  <?php }?> 
                  </tbody>
                  
                </table>
                </div>

                <div class="row">
                  <h3>Rincian Biaya</h3>
                </div>
                <form action="<?php echo site_url('user/transaksi/simpan_total/'.$invoice);?>" method="post" >
                <div class="row">
                  <div class="col-sm-4">
                    <div class="form-group" hidden>
                        <label for="exampleFormControlInput1">Jumlah Total Sepatu</label>
                        <input type="text" name="total_sepatu" class="form-control" id="exampleFormControlInput1" placeholder="" value="<?php echo $sum_total_sepatu->total_sepatu; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Jumlah Total Sepatu : <?php echo number_format($sum_total_sepatu->total_sepatu); ?></label>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group" hidden>
                        <label for="exampleFormControlInput1">Total Harga</label>
                        <input type="text" name="total_harga" class="form-control" id="exampleFormControlInput1" placeholder="" value="<?php echo $sum_total->total_semua; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Total Harga : Rp.<?php echo number_format($sum_total->total_semua); ?></label>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                        <button type="submit" style="float: right;" class="btn btn-success">Selesai dan Lanjut WA</button>
                    </div>
                  </div>
                </div>
                </form>

                <!-- button:hover {
  background-color: #fff;
  border: 1px solid #333;
  color: #333;-->
            
          </div>
        </div>
    </div>
  </div>
  <!-- End About area -->

  <!-- Start Footer bottom Area -->
  <?php $this->load->view('user/res/footer'); ?>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <?php $this->load->view('user/res/script');?>
</body>
</html>
