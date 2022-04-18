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
                <a class="navbar-brand page-scroll sticky-logo" href="index.html">
                  <h1><span>Day</span>Clean</h1>
                  <!-- Uncomment below if you prefer to use an image logo -->
                  <!-- <img src="img/logo.png" alt="" title=""> -->
								</a>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
                <ul class="nav navbar-nav navbar-right">
                  <li class="active">
                    <a class="page-scroll" href="#home">Home</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#about">About</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#services">Treatment</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#portfolio">Portfolio</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#contact">Contact</a>
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

  <!-- Start Slider Area -->
  <div id="home" class="slider-area">
    <div class="bend niceties preview-2">
      <div id="ensign-nivoslider" class="slides">
        <img src="<?php echo base_url('lib_user/img/slider/slider1.jpg')?>" alt="" title="#slider-direction-1" />
        <img src="<?php echo base_url('lib_user/img/slider/slider2.jpg')?>" alt="" title="#slider-direction-2" />
      </div>

      <!-- direction 1 -->
      <div id="slider-direction-1" class="slider-direction slider-one">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content">
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs wow slideInDown" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1">DayClean Jember Shoes Care</h2>
                </div>
                <!-- layer 2 -->
                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <h1 class="title2"> Kami Telah Mencuci </h1>
                </div>
                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <h1 class="title2"><?= $jumlah_sepatu->jumlah ?> pasang sepatu</h1>
                </div>
                <!-- layer 3 -->
                <div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1">dan akan terus bertambah</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- direction 2 -->
      <div id="slider-direction-2" class="slider-direction slider-two">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content text-center">
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1">DayClean Jember Shoes Care</h2>
                </div>
                <!-- layer 2 -->
                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <h1 class="title2">CLEANING | REPAIR | REPAINT</h1>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Slider Area -->

  <!-- Start About area -->
  <div id="about" class="about-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="col-sm-6 col-md-offset-3">
            <form action="<?php echo site_url('user/transaksi/cek_invoice'); ?>" method="post" >
                <div class="form-group">
                    <label for="exampleFormControlInput1">Cek Invoice</label>
                    <input type="text" name="invoice" class="form-control" id="exampleFormControlInput1" required>
                </div>
                <div>
                <button type="submit" style="float: right;" class="btn btn-primary btn-rounded mt-2 mr-2">Simpan</button>
                </div>
            </form>
          </div>

          <div class="section-headline text-center">
            <h2>Tentang DayClean</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <!-- single-well start-->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="well-left">
            <div class="single-well">
              <a href="#">
								  <img src="<?php echo base_url('lib_user/img/about/2.jpg') ?>" alt="">
								</a>
            </div>
          </div>
        </div>
        <!-- single-well end-->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="well-middle">
            <div class="single-well">
              <a href="#">
                <h4 class="sec-head"></h4>
              </a>
              <p>
                Disini kami menyediakan jasa laundry cuci sepatu dan perawatan sepatu anda yang rusak, warna pudar, dan kerusakan lainnya.Prioritas kami adalah kebanggaan anda terhadap jasa kami. Happy Order !
              </p>
              <ul>
                <li>
                  <i class="fa fa-check"></i> Cepat
                </li>
                <li>
                  <i class="fa fa-check"></i> Murah
                </li>
                <li>
                  <i class="fa fa-check"></i> Harum
                </li>
                <li>
                  <i class="fa fa-check"></i> Free Pick Up and Delivery
                </li>
                
              </ul>
            </div>
          </div>
        </div>
        <!-- End col-->
      </div>
    </div>
  </div>
  <!-- End About area -->

  <!-- Start Service area -->
  <div id="services" class="services-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline services-head text-center">
            <h2>TREATMENT</h2>
          </div>
        </div>
      </div>
      <div class="row text-center">
        <div class="services-contents">
          <!-- Start Left services -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="about-move">
              <div class="services-details">
                <div class="single-services">
                  <h4>FAST CLEAN</h4>
                  <p>
                    Adalah treatment pembersihan secara cepat dan bersih hanya pada bagian MIDSOLE dan UPPER sepatu. Waktu pengerjaan maksimal 1-2 hari.
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="about-move">
              <div class="services-details">
                <div class="single-services">
                  <h4>DEEP CLEAN</h4>
                  <p>
                    Adalah treatment pembersihan secara menyeluruh pada bagian sepatu sehingga dapat membersihkan sepatu. Waktu Pengerjaan maksimal 2-3 hari.
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <!-- end col-md-4 -->
            <div class=" about-move">
              <div class="services-details">
                <div class="single-services">
                  <h4>RE-GLUE</h4>
                  <p>
                    Adalah proses perbaikan sepatu bagian SOLE yang sudah rusak akbiat kegiatan sehari-hari dengan menggunakan lem khusus sepatu.
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <!-- end col-md-4 -->
            <div class=" about-move">
              <div class="services-details">
                <div class="single-services">
                  <h4>UNYELLOWING</h4>
                  <p>
                    Adalah proses penghilangan noda kuning pada OUTSOLE atau MIDSOLE yang terjadi akibat proses oksidasi.
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <!-- End Left services -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <!-- end col-md-4 -->
            <div class=" about-move">
              <div class="services-details">
                <div class="single-services">
                  <h4>RE-PAINT</h4>
                  <p>
                    Adalah proses pengecatan ulang pada sepatu yang warnanya sudah memudar dengan menggunakan cat khusus sepatu.
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Service area -->

  <!-- Faq area start -->
  <div class="faq-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>Faq Question</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="faq-details">
            <div class="panel-group" id="accordion">
              <!-- Panel Default -->
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="check-title">
											<a data-toggle="collapse" class="active" data-parent="#accordion" href="#check1">
                        <span class="acc-icons"></span>Cara Pesannya bagaimana kak?
											</a>
										</h4>
                </div>
                <div id="check1" class="panel-collapse collapse in">
                  <div class="panel-body">
                    <p>
                      Klik order, kemudian isi biodata pelanggan, dan klik simpan
                    </p>
                  </div>
                </div>
              </div>
              <!-- End Panel Default -->
              <!-- Panel Default -->
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="check-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#check2">
                        <span class="acc-icons"></span> Cara penginputan sepatu yang ingin di laundry bagaimana kak?
											</a>
										</h4>
                </div>
                <div id="check2" class="panel-collapse collapse">
                  <div class="panel-body">
                    <p>
                      Saat selesai penginputan, disana terdapat form pengisian jumlah sepatu yang akan dilaundry dan keterangan sepatu yang akan di laundry.
                    </p>
                  </div>
                </div>
              </div>
              <!-- End Panel Default -->
              <!-- Panel Default -->
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="check-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#check3">
                        <span class="acc-icons"></span>Untuk re-paint bagaimana kak?
											</a>
										</h4>
                </div>
                <div id="check3" class="panel-collapse collapse ">
                  <div class="panel-body">
                    <p>
                      Kita gunakan pewarna untuk re-paint sepatu pelanggan. kita sesuaikan dengan warna sepatu aslinya atau sesuai minat pelanggan
                    </p>
                  </div>
                </div>
              </div>
              <!-- End Panel Default -->
              
            </div>
          </div>
        </div>
        </div>
      </div>
      <!-- end Row -->
    </div>
  </div>
  <!-- End Faq Area -->

  <!-- Start reviews Area -->
  <div class="reviews-area hidden-xs">
    <div class="work-us">
      <div class="work-left-text">
        <a href="#">
						<img src="img/about/2.jpg" alt="">
					</a>
      </div>
      <div class="work-right-text text-center">
        <h2>working with us</h2>
        <h5>Web Design, Ready Home, Construction and Co-operate Outstanding Buildings.</h5>
        <a href="#contact" class="ready-btn">Contact us</a>
      </div>
    </div>
  </div>
  <!-- End reviews Area -->

  <!-- Start portfolio Area -->
  <div id="portfolio" class="portfolio-area area-padding fix">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>Our Portfolio</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="awesome-project-content">
          <!-- single-awesome-project start -->
          <div class="col-md-4 col-sm-4 col-xs-12 design development">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="<?php echo base_url('lib_user/img/portfolio/1.jpg') ?>" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="<?php echo base_url('lib_user/img/portfolio/1.jpg') ?>">
                      <h4>Day Clean</h4>
                      <span>Jember</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- single-awesome-project end -->
          <!-- single-awesome-project start -->
          <div class="col-md-4 col-sm-4 col-xs-12 photo">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="<?php echo base_url('lib_user/img/portfolio/2.jpg') ?>" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="<?php echo base_url('lib_user/img/portfolio/2.jpg') ?>">
                      <h4>Day Clean</h4>
                      <span>Jember</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- single-awesome-project end -->
          <!-- single-awesome-project start -->
          <div class="col-md-4 col-sm-4 col-xs-12 design">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="<?php echo base_url('lib_user/img/portfolio/3.jpg') ?>" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="<?php echo base_url('lib_user/img/portfolio/3.jpg') ?>">
                      <h4>Day Clean</h4>
                      <span>Jember</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- single-awesome-project end -->
          <!-- single-awesome-project start -->
          <div class="col-md-4 col-sm-4 col-xs-12 photo development">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="<?php echo base_url('lib_user/img/portfolio/4.jpg') ?>" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="<?php echo base_url('lib_user/img/portfolio/4.jpg') ?>">
                      <h4>Day Clean</h4>
                      <span>Jember</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- single-awesome-project end -->
          <!-- single-awesome-project start -->
          <div class="col-md-4 col-sm-4 col-xs-12 development">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="<?php echo base_url('lib_user/img/portfolio/5.jpg') ?>" alt="" /></a>
                <div class="add-actions text-center text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="<?php echo base_url('lib_user/img/portfolio/5.jpg') ?>">
                      <h4>Day Clean</h4>
                      <span>Jember</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- single-awesome-project end -->
          <!-- single-awesome-project start -->
          <div class="col-md-4 col-sm-4 col-xs-12 design photo">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="<?php echo base_url('lib_user/img/portfolio/6.jpg') ?>" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="<?php echo base_url('lib_user/img/portfolio/6.jpg') ?>">
                      <h4>Day Clean</h4>
                      <span>Jember</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- single-awesome-project end -->
        </div>
      </div>
    </div>
  </div>
  <!-- awesome-portfolio end -->
  <!-- Start Testimonials -->
  
  <!-- End Testimonials -->

  <!-- Start contact Area -->
  <div id="contact" class="contact-area">
    <div class="contact-inner area-padding">
      <div class="contact-overly"></div>
      <div class="container ">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Contact us</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- Start contact icon column -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="contact-icon text-center">
              <div class="single-icon">
                <i class="fa fa-mobile"></i>
                <p>
                  Call: +62 7884-249-654<br>
                  <span>Senin-Minggu (09:00 - 17:00)</span>
                </p>
              </div>
            </div>
          </div>
          <!-- Start contact icon column -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="contact-icon text-center">
              <div class="single-icon">
                <i class="fa fa-envelope-o"></i>
                <p>
                  Email: fahmimalik@gmail.com<br>
                  <span>Web: www.daycleanjember.com</span>
                </p>
              </div>
            </div>
          </div>
          <!-- Start contact icon column -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="contact-icon text-center">
              <div class="single-icon">
                <i class="fa fa-map-marker"></i>
                <p>
                  Location: Jalan Hayam Wuruk I<br>
                  <span>Jember</span>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Contact Area -->

  <!-- Start Footer bottom Area -->
  <?php $this->load->view('user/res/footer'); ?>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <?php $this->load->view('user/res/script');?>
</body>
</html>
