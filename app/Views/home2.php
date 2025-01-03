<?php

use App\Controllers\LandingPage;
?>
<!DOCTYPE html>
<html lang="en">
   <!-- Basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- Mobile Metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- Site Metas -->
   <title>Klinik Maryam</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- Site Icons -->
   <link rel="shortcut icon" href="<?= base_url() ?>/docs/assets/images/fevicon.ico.png" type="image/x-icon" />
   <link rel="apple-touch-icon" href="<?= base_url() ?>docs/assets/images/apple-touch-icon.png">
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="<?= base_url() ?>/docs/assets/css/bootstrap.min.css">
   <!-- Site CSS -->
   <link rel="stylesheet" href="<?= base_url() ?>/docs/assets/style.css">
   <!-- Colors CSS -->
   <link rel="stylesheet" href="<?= base_url() ?>/docs/assets/css/colors.css">
   <!-- ALL VERSION CSS -->
   <link rel="stylesheet" href="<?= base_url() ?>/docs/assets/css/versions.css">
   <!-- Responsive CSS -->
   <link rel="stylesheet" href="<?= base_url() ?>/docs/assets/css/responsive.css">
   <!-- Custom CSS -->
   <link rel="stylesheet" href="<?= base_url() ?>/docs/assets/css/custom.css">
   <!-- Modernizer for Portfolio -->
   <script src="<?= base_url() ?>/docs/assets/js/modernizer.js"></script>
   <!-- [if lt IE 9] -->
   </head>
   <body class="clinic_version">
      <!-- LOADER -->
      <div id="preloader">
         <img class="preloader" src="<?= base_url() ?>/docs/assets/images/loaders/heart-loading2.gif" alt="">
      </div>
      <!-- END LOADER -->
      <header>
         <div class="header-top wow fadeIn">
            <div class="container">
              <span href="<?=base_url("LandingPage")?>"><img src="<?= base_url() ?>/docs/assets/images/icon-logo.png" width="50" height="50" alt="image"></span>
               <div class="right-header">
                  <div class="header-info">
                     <div class="info-inner">
                        <span class="icontop"><img src="images/phone-icon.png" alt="#"></span>
                        <span class="iconcont"><a href="#">085677931455</a></span>	
                     </div>
                     <div class="info-inner">
                        <span class="icontop"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                        <span class="iconcont"><a data-scroll href="#">klinikmaryam@gmail.com</a></span>	
                     </div>
                     <div class="info-inner">
                        <span class="icontop"><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                        <span class="iconcont"><a data-scroll href="#">7:00 - 20:00 WIB</a></span>	
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="header-bottom wow fadeIn">
            <div class="container">
               <nav class="main-menu">
                  <div class="navbar-header">
                     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i class="fa fa-bars" aria-hidden="true"></i></button>
                  </div>
				  
                  <div id="navbar" class="navbar-collapse collapse">
                     <ul class="nav navbar-nav">
                        <li><a class="active" href="<?=base_url("LandingPage")?>">Beranda</a></li>
                        <li><a data-scroll href="#about">Tentang Kita</a></li>
                        <li><a data-scroll href="#service">Pelayanan</a></li>
                        <li><a data-scroll href="#doctors">Dokter</a></li>
                     </ul>
                  </div>
               </nav>
               <div class="serch-bar">
                  <div id="custom-search-input">
                     <div class="input-group col-md-12">
                        <input type="text" class="form-control input-lg" placeholder="Search" />
                        <span class="input-group-btn">
                        <button class="btn btn-info btn-lg" type="button">
                        <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                        </span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <div id="home" class="parallax first-section wow fadeIn" data-stellar-background-ratio="0.4" style="background-image:<?= base_url() ?>/docs/assets/images/slider-bg.png;">
         <div class="container">
            <div class="row">
               <div class="col-md-12 col-sm-12">
                  <div class="text-contant">
                     <h2>
                        <span class="center"><img src="<?= base_url() ?>/docs/assets/images/icon-logo.png" width="70" height="70" alt="#" /></span>
                        <a href="" class="typewrite" data-period="2000" data-type='[ "Selamat Datang!", "Semoga Lekas Sembuh" ]'>
                        <span class="wrap"></span>
                        </a>
                     </h2>
                  </div>
               </div>
            </div>
            <!-- end row -->
         </div>
         <!-- end container -->
      </div>
      <!-- end section -->
      <div id="time-table" class="time-table-section">
         <div class="container">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
               <div class="row">
                  <div class="service-time one" style="background:#2895f1;">
                     <span class="info-icon"><i class="fa fa-ambulance" aria-hidden="true"></i></span>
                     <h3>Laboratorium</h3>
                     <p>Melayani tes laboratorium untuk mendapat informasi kesehatan Anda lebih mudah.</p>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
               <div class="row">
                  <div class="service-time middle" style="background:#0071d1;">
                     <span class="info-icon"><i class="fa fa-clock-o" aria-hidden="true"></i></span> 
                     <h3>Waktu Buka</h3>
                     <div class="time-table-section">
                        <ul>
                           <li><span class="left">Senin - Jum'at</span><span class="right">7.00 – 21.00</span></li>
                           <li><span class="left">Sabtu</span><span class="right">8.00 – 20.00</span></li>
                           <li><span class="left">Minggu</span><span class="right">8.00 – 15.00</span></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
               <div class="row">
                  <div class="service-time three" style="background:#0060b1;">
                     <span class="info-icon"><i class="fa fa-hospital-o" aria-hidden="true"></i></span>
                     <h3>Poli yang Tersedia</h3>
                     <p>Tersedia Poli Anak, Poli Umum, dan Poli Gigi</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div id="about" class="section wow fadeIn">
         <div class="container">
            <div class="heading">
               <span class="icon-logo"><img src="<?= base_url() ?>/docs/assets/images/icon-logo.png" alt="#"></span>
               <h2>Klinik Maryam</h2>
            </div>
            <!-- end title -->
            <div class="row">
               <div class="col-md-6">
                  <div class="message-box">
                     <h4>Bagaimana cara daftar?</h4>
                     <h2>Klinik Service</h2>
                     <p class="lead">Anda bisa mendaftar menjadi pasien SIP ASDP dengan cara klik tombol Daftar di bawah ini.</p>
                     <p>Jika Anda kesulitan silahkan tanyakan melalui kontak kami atau datang langsung ke tempat.</p>
                     <a href="<?=base_url("Registrasi")?>" data-scroll class="btn btn-light btn-radius btn-brd grd1 effect-1">Daftar</a>
                  </div>
                  <!-- end messagebox -->
               </div>
               <!-- end col -->
               <div class="col-md-6">
                  <div class="post-media wow fadeIn">
                     <img src="<?= base_url() ?>/docs/assets/images/about_03.jpg" alt="" class="img-responsive">
                     <a href="http://www.youtube.com/watch?v=nrJtHemSPW4" data-rel="prettyPhoto[gal]" class="playbutton"><i class="flaticon-play-button"></i></a>
                  </div>
                  <!-- end media -->
               </div>
               <!-- end col -->
            </div>
            <!-- end row -->
            <hr class="hr1">
            <div class="row">
               <div class="col-md-3 col-sm-6 col-xs-12">
                  <div class="service-widget">
                     <div class="post-media wow fadeIn">
                        <a href="<?= base_url() ?>/docs/assets/images/clinic_01.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                        <img src="<?= base_url() ?>/docs/assets/images/clinic_01.jpg" alt="" class="img-responsive">
                     </div>
                     <h3>Laboratorium</h3>
                  </div>
                  <!-- end service -->
               </div>
               <div class="col-md-3 col-sm-6 col-xs-12">
                  <div class="service-widget">
                     <div class="post-media wow fadeIn">
                        <a href="<?= base_url() ?>/docs/assets/images/clinic_02.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                        <img src="<?= base_url() ?>/docs/assets/images/clinic_02.jpg" alt="" class="img-responsive">
                     </div>
                     <h3>Poli Anak</h3>
                  </div>
                  <!-- end service -->
               </div>
               <div class="col-md-3 col-sm-6 col-xs-12">
                  <div class="service-widget">
                     <div class="post-media wow fadeIn">
                        <a href="<?= base_url() ?>/docs/assets/images/clinic_03.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                        <img src="<?= base_url() ?>/docs/assets/images/clinic_03.jpg" alt="" class="img-responsive">
                     </div>
                     <h3>Poli Umum</h3>
                  </div>
                  <!-- end service -->
               </div>
               <div class="col-md-3 col-sm-6 col-xs-12">
                  <div class="service-widget">
                     <div class="post-media wow fadeIn">
                        <a href="<?= base_url() ?>/docs/assets/images/clinic_01.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                        <img src="<?= base_url() ?>/docs/assets/images/clinic_01.jpg" alt="" class="img-responsive">
                     </div>
                     <h3>Poli Gigi</h3>
                  </div>
                  <!-- end service -->
               </div>
            </div>
            <!-- end row -->
         </div>
         <!-- end container -->
      </div>
      <div id="service" class="services wow fadeIn">
         <div class="container">
            <div class="row">
               <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                  <div class="inner-services">
                     <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="serv">
                           <span class="icon-service"><img src="<?= base_url() ?>/docs/assets/images/service-icon1.png" alt="#" /></span>
                           <h4>PELAYANAN RAMAH</h4>
                           <p>Kami akan melayani Anda dengan sepenuh hati.</p>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="serv">
                           <span class="icon-service"><img src="<?= base_url() ?>/docs/assets/images/service-icon2.png" alt="#" /></span>
                           <h4>LABORATORIUM TERPERCAYA</h4>
                           <p>Memperkerjakan ahli dan alat yang mendukung.</p>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="serv">
                           <span class="icon-service"><img src="<?= base_url() ?>/docs/assets/images/service-icon3.png" alt="#" /></span>
                           <h4>DOKTER ANDALAN</h4>
                           <p>Dokter kami akan memberikan pelayanan terbaik.</p>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="serv">
                           <span class="icon-service"><img src="<?= base_url() ?>/docs/assets/images/service-icon4.png" alt="#" /></span>
                           <h4>RUANG RAMAH ANAK</h4>
                           <p>Kami menyediakan ruang tunggu ramah anak.</p>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="serv">
                           <span class="icon-service"><img src="<?= base_url() ?>/docs/assets/images/service-icon5.png" alt="#" /></span>
                           <h4>BERSIH DAN NYAMAN</h4>
                           <p>Kebersihan klinik terjaga untuk kenyamanan Anda.</p>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="serv">
                           <span class="icon-service"><img src="<?= base_url() ?>/docs/assets/images/service-icon6.png" alt="#" /></span>
                           <h4>LAYANAN CUSTOMER ONLINE</h4>
                           <p>Anda bisa menghubungi kami melalui kontak untuk mendapat informasi.</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end section -->
	  
	  <!-- doctor -->
	  
	  <div id="doctors" class="parallax section db" data-stellar-background-ratio="0.4" style="background:#fff;" data-scroll-id="doctors" tabindex="-1">
        <div class="container">
		
		<div class="heading">
               <span class="icon-logo"><img src="<?= base_url() ?>/docs/assets/images/icon-logo.png" alt="#"></span>
               <h2>Daftar Dokter</h2>
            </div>

            <div class="row dev-list text-center">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeIn;">
                    <div class="widget clearfix">
                        <img src="<?= base_url() ?>/docs/assets/images/doctor_01.jpg" alt="" class="img-responsive img-rounded">
                        <div class="widget-title">
                            <h3>Mahen Pratama</h3>
                            <small>Dokter Anak</small>
                        </div>
                        <!-- end title -->
                        <!-- <p>Hello guys, I am Soren from Sirbistana. I am senior art director and founder of Violetta.</p>

                        <div class="footer-social">
                            <a href="#" class="btn grd1"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="btn grd1"><i class="fa fa-github"></i></a>
                            <a href="#" class="btn grd1"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="btn grd1"><i class="fa fa-linkedin"></i></a>
                        </div> -->
                    </div><!--widget -->
                </div><!-- end col -->

                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeIn;">
                    <div class="widget clearfix">
                        <img src="<?= base_url() ?>/docs/assets/images/doctor_02.jpg" alt="" class="img-responsive img-rounded">
                        <div class="widget-title">
                            <h3>Astridiah Primacita</h3>
                            <small>Dokter Umum</small>
                        </div>
                        <!-- end title -->
                        <!-- <p>Hello guys, I am Soren from Sirbistana. I am senior art director and founder of Violetta.</p>

                        <div class="footer-social">
                            <a href="#" class="btn grd1"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="btn grd1"><i class="fa fa-github"></i></a>
                            <a href="#" class="btn grd1"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="btn grd1"><i class="fa fa-linkedin"></i></a>
                        </div> -->
                    </div><!--widget -->
                </div><!-- end col -->

                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn">
                    <div class="widget clearfix">
                        <img src="<?= base_url() ?>/docs/assets/images/doctor_03.jpg" alt="" class="img-responsive img-rounded">
                        <div class="widget-title">
                            <h3>Ratna Dewi Safitri</h3>
                            <small>Dokter Gigi</small>
                        </div>
                        <!-- end title -->
                        <!-- <p>Hello guys, I am Soren from Sirbistana. I am senior art director and founder of Violetta.</p>

                        <div class="footer-social">
                            <a href="#" class="btn grd1"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="btn grd1"><i class="fa fa-github"></i></a>
                            <a href="#" class="btn grd1"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="btn grd1"><i class="fa fa-linkedin"></i></a>
                        </div> -->
                    </div><!--widget -->
                </div><!-- end col -->

            </div><!-- end row -->
        </div><!-- end container -->
    </div>
	  
      <!-- <div id="getintouch" class="section wb wow fadeIn" style="padding-bottom:0;">
         <div class="container">
            <div class="heading">
               <span class="icon-logo"><img src="<?= base_url() ?>/docs/assets/images/icon-logo.png" alt="#"></span>
               <h2>Letak Klinik</h2>
            </div>
         </div>
         <div class="contact-section">
            <div class="form-contant">
               <form id="ajax-contact" action="assets/mailer.php" method="post">
                  <div class="row">
                     <div class="col-md-6">
                        <div class="form-group in_name">
                           <input type="text" class="form-control" placeholder="Name" required="required">
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group in_email">
                           <input type="email" class="form-control" placeholder="E-mail" required="required">
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group in_email">
                           <input type="tel" class="form-control" id="phone" placeholder="Phone" required="required">
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group in_email">
                           <input type="text" class="form-control" id="subject" placeholder="Subject" required="required">
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="form-group in_message"> 
                           <textarea class="form-control" id="message" rows="5" placeholder="Message" required="required"></textarea>
                        </div>
                        <div class="actions">
                           <input type="submit" value="Send Message" name="submit" id="submitButton" class="btn small" title="Submit Your Message!">
                        </div>
                     </div>
                  </div>
               </form>
            </div>
            <div id="googleMap" style="width:100%;height:450px;"></div>
         </div>
      </div> -->
      <footer id="footer" class="footer-area wow fadeIn">
         <div class="container">
            <div class="row">
               <div class="col-md-4">
                  <div class="subcriber-info">
                     <h3>Klinik Maryam</h3>
                     <p>SIP ASDP salah satu klinik terpercaya di Kabupaten Madiun. Sudah berdiri sejak 2012.</p>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="footer-info padding">
                     <h3>Kontak</h3>
                     <p><i class="fa fa-map-marker" aria-hidden="true"></i> Jalan Manggil No 112</p>
                     <p><i class="fa fa-paper-plane" aria-hidden="true"></i> klinikmaryam@gmail.com</p>
                     <p><i class="fa fa-phone" aria-hidden="true"></i> 085 607 937 344</p>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="subcriber-info">
                     <h3>Saran & Kritik</h3>
                     <p>Sampaikan saran dan kritik anda melalui e-mail kami.</p>
                     <div class="subcriber-box">
                        <form id="mc-form" class="mc-form">
                           <div class="newsletter-form">
                              <input type="email" autocomplete="off" id="mc-email" placeholder="Email address" class="form-control" name="EMAIL">
                              <button class="mc-submit" type="submit"><i class="fa fa-paper-plane"></i></button> 
                              <div class="clearfix"></div>
                              <!-- mailchimp-alerts Start -->
                              <div class="mailchimp-alerts">
                                 <div class="mailchimp-submitting"></div>
                                 <!-- mailchimp-submitting end -->
                                 <div class="mailchimp-success"></div>
                                 <!-- mailchimp-success end -->
                                 <div class="mailchimp-error"></div>
                                 <!-- mailchimp-error end -->
                              </div>
                              <!-- mailchimp-alerts end -->
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <div class="copyright-area wow fadeIn">
         <div class="container">
            <div class="row">
               <div class="col-md-8">
                  <div class="footer-text">
                     <p>© 2018. Distributed by <a id="tw" href="https://themewagon.com/" target="_blank">ThemeWagon</a></p>
                  </div>
               </div>
               <!-- <div class="col-md-4">
                  <div class="social">
                     <ul class="social-links">
                        <li><a href=""><i class="fa fa-rss"></i></a></li>
                        <li><a href=""><i class="fa fa-facebook"></i></a></li>
                        <li><a href=""><i class="fa fa-twitter"></i></a></li>
                        <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                        <li><a href=""><i class="fa fa-youtube"></i></a></li>
                        <li><a href=""><i class="fa fa-pinterest"></i></a></li>
                     </ul>
                  </div>
               </div> -->
            </div>
         </div>
      </div>
      <!-- end copyrights -->
      <a href="#home" data-scroll class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>
      <!-- all js files -->
      <script src="<?= base_url() ?>/docs/assets/js/all.js"></script>
      <!-- all plugins -->
      <script src="<?= base_url() ?>/docs/assets/js/custom.js"></script>
      <!-- map -->
     <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCNUPWkb4Cjd7Wxo-T4uoUldFjoiUA1fJc&callback=myMap"></script>
   </body>
</html>
