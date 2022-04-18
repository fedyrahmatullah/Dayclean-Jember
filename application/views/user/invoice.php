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
            <h2>INVOICE : <?php echo $invoice->invoice ?></h2>
          </div>
        </div>
      </div>
      <div class="row">
          <div class="col-sm-6 col-md-offset-3">
            <form action="" method="post" >
                <div class="form-group">
                    <label for="exampleFormControlInput1">Nama customer</label>
                    <input type="text" name="nama_user" class="form-control" id="exampleFormControlInput1" placeholder=""  value="<?php echo $invoice->nama_user ?>" disabled>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Alamat</label>
                    <input type="text" name="alamat_user" class="form-control" id="exampleFormControlInput1" placeholder="" value="<?php echo $invoice->alamat_user ?>" disabled>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Nomer Telepon</label>
                    <input type="number" name="no_hp" class="form-control" id="exampleFormControlInput1" placeholder="" value="<?php echo $invoice->no_hp ?>" disabled>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Jumlah Sepatu</label>
                    <input type="text" name="jumlah_sepatu" class="form-control" id="exampleFormControlInput1" placeholder="" value="<?php echo $invoice->jumlah_sepatu ?>" disabled>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Status</label>
                    <input type="text" name="status" class="form-control" id="exampleFormControlInput1" placeholder="" value="<?php echo $invoice->status ?>" disabled>
                </div>
            </form>
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
